# Hacking-Social_Media-Accounts
Hacking Social Media Accounts with Phishing Tool (GoPhish) 🐟

<div align="center">

![1](https://media.giphy.com/media/8eteLyVqRlL1AOz7Uz/giphy.gif)
</div>


# gophish-templates
Templates for an open-source Phishing Toolkit
Some very basic configurations and templates to provide clean layouts usable in [GoPhish](https://github.com/gophish/gophish), an open-source phishing toolkit. These layouts provided will also work with any other phising service as well, though they have only been tested in GoPhish.

![GoPhish](https://i.imgur.com/7Jklgjv.png)

## Installation ⚓
Installing the files is easy. Download the GoPhish client and log in at `https://127.0.0.1:3333/` with the standard credentials visible in the command line. There, the various templates and landing pages can be configured with my html configurations. 
 
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

A very basic Google mail, which notifies the user about a login.  

Subject: `New Sign In`  
Sender: `no-reply@accounts.google.com`  

![chromemail](https://i.imgur.com/wx0g4ZC.png)

# Q/A Submitted Form Data Isn't Being Captured ? 
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

## Disclaimer
The files in this repository were created and modified by me,  for my own personal use and come with no guarantee to work for you. I provide these files "as-is" and offer no support whatsoever to get them working. A lot of these files use terrible formatted and layered tables, anyone working with email and newsletter designs knows how painful they can be, and how worse it is to reverse-engineer those.🦆


