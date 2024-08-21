# Meterpreter as Persistence Backdoor 💀⃤
<div align="center">

![3](https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExNXoyYTFucjYyaWtzMHhtdHgzbGYyOTRpMmozNDZnb3hsdjk1anZtbCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/UqxVRm1IaaIGk/giphy.gif)
</div>

## Understanding the Metasploit Meterpreter

After going through all the hard work of exploiting a system, it’s often a good idea to leave yourself an easier way back into the system for later use. This way, if the service you initially exploited is down or patched, you can still gain access to the system. Metasploit has a Meterpreter script, persistence.rb, that will create a Meterpreter service that will be available to you even if the remote system is rebooted.

One word of warning here before we go any further. The persistent Meterpreter as shown here requires no authentication. This means that anyone that gains access to the port could access your back door! This is not a good thing if you are conducting a penetration test, as this could be a significant risk. In a real world situation, be sure to exercise the utmost caution and be sure to clean up after yourself when the engagement is done.

Once we’ve initially exploited the host, we run persistence with the -h switch to see which options are available:

![ddddd](https://github.com/user-attachments/assets/e41ccb26-ca4c-4229-a814-51b493e03936)

We will configure our persistent Meterpreter session to wait until a user logs on to the remote system and try to connect back to our listener every 5 seconds at IP address 192.168.1.71 on port 443.

![Screenshot 2024-08-21 152812](https://github.com/user-attachments/assets/f6dd6cda-45bc-4700-8740-c93190fac839)

Notice that the script output gives you the command to remove the persistent listener when you are done with it. Be sure to make note of it so you don’t leave an unauthenticated backdoor on the system. To verify that it works, we reboot the remote system and set up our payload handler.

![aaaa](https://github.com/user-attachments/assets/47e2b129-b4aa-41c3-b6c2-bb4845dfea9d)

When a user logs in to the remote system, a Meterpreter session is opened up for us.

![bbbbbb](https://github.com/user-attachments/assets/73878a64-f30f-4b0e-aebe-dd6bd4593501)
