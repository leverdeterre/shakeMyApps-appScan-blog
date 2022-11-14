---
title: "How analyze a competitor App?"
permalink: /how-to-analyze-a-competitor-app.html
layout: single
author_profile: false
image: /assets/images/illustrations/appscan-complex-problem.png
header:
    overlay_filter: 0.5 # same as adding an opacity of 0.5 to a black background
    overlay_image: /assets/images/illustrations/appscan-complex-problem.png
---

Analyze a competitor App is very challenging. Most of the time you will be able to use with the app and try to guess the tricks and secrets. 

# How analyze a competitor App?
This can be divided into multiple steps : Get the ipa, analyze the package, analyze the binary. Finally, we can consider it's a very challagening process, it requires a lot of time and expertise.

AppScan has developped a methodology to analyze an App and a service to apply this to any App **faster than anyone** and **without source code**.
<a class="btn btn--success" style="margin-top:20px" href="/pricing.html">Discover AppScan offers</a>{: .align-center}
{: .notice--success}

## Why analyze a competitor App? 
It is very interesting to understand who you are dealing with. What is its development strategy, what functionality does it prioritize? What technology has he chosen? How does it integrate with the system? 
These are all things that can guide strategic choices and prioritize features in the roadmap.

## Get the App
It's already a first difficulty.
On iOS, an app is packaged as an [.ipa](https://en.wikipedia.org/wiki/.ipa) to be installed on a device.
There are a few methods to successfully obtain that file : 
- **old version of iTunes (<= 12.6)**: In this previous versions of iTunes, it was possible to download and save the .ipa... but it's not working anymore
- **iAmazing**: a very cool tool, you can connect your device and iAmazing is able to generate backups of your apps. [Manage and Download Apps .ipa without iTunes](https://imazing.com/guides/how-to-manage-apps-without-itunes)
- **Apple Configurator 2**: The MDM (Mobile Device Management) of Apple. With some manipulations and a little time you can manage to recover the famous file. There are plenty of articles on the web that explain this.
- **Jailbroken device + Frida**: Clearly not the easiest method. It requires a jailbroken device and the desire to get your hands into the code. It is very complicated to have a modified phone because Apple has secured its devices very well. 

  
---
  
To summarize 

| Get .ipa | complexity | 
| :--- | :--- |
| iAmazing | **easy** | 
| Apple Configurator 2 | **complex** | 
| Jailbroken device + Frida | **horribly complex** | 
  
**TLDR;** 🤓 It's not so complicated to get an .ipa, you can use simple tools to get it.
{: .notice--success}

## Analyze the App package

Niiiiice, you managed to get the app, now it's time to understand it.
An ipa is just a zip, so to open and extract the content, you can rename the .ipa to .zip and unzip it.
The App package is [well organized and documented by Apple](https://developer.apple.com/library/archive/documentation/CoreFoundation/Conceptual/CFBundles/BundleTypes/BundleTypes.html#//apple_ref/doc/uid/10000123i-CH101-SW1)

### App infos 
The main entry of the App is the Info.plist, in the file you have access to a lot of informations about the App features :
- Permissions list 
- Lot of keys
- Custom Fonts 

### App Technolgy 
Nothing magic to evaluate this. You need a knowledge on each possible technology and how each technology organize the bundle.

### App resources 
Looking the bundle (and each directories) you can identified resources : images, jsons, assets, etc

### App librairies 
Most of the time, third party libraries are package in a separate directoy (/framewoks), you can have a look at this and try to identified the libraries using framework name. 

### App size 
Looking the bundle and every files, it's possible to understand the weight of the App.
  
---
  
To summarize 

| Analyze the package | complexity | 
| :--- | :--- |
| Get Permissions | **easy** | 
| Identify the Custom keys | **hard** because you have to know what a the standard keys | 
| Identify the App technology | **hard** because you have to know each technology and packaging technics | 
| Identify the libraries | **hard** and long because you need to check the names on by one | 
| Study the App size | **quite annoying** | 

**TLDR;** 🤯 It's possible but quite complicated to understand some details of the Apps. You can start to get an idea of the application but you will be very quickly confronted with a problem of knowledge to understand the app
{: .notice--warning}

### Analyze the App binary (executable file)
Here we tackle a very hard task. 
Apple takes security very seriously and it makes sense if you can have a look to the official guide of Apple ([apple platform security guide](https://help.apple.com/pdf/security/en_US/apple-platform-security-guide.pdf) 

Executable file is the most protected component in the App. It's protected by an encryption algorithm and this file is only decrypted by a **Real device** running the App.
To have a decrypted version of that file you need a very complicated setup : a jailbroken device and a strong technical background to be able to run complex commands. 

**Having a jailbroken device** is very hard because to jailbreak a device we need to use an exploit and only few versions of iOS are compatible and only for a limited number of devices. [iOS jailbreak state of the art](https://en.wikipedia.org/wiki/IOS_jailbreaking)

**TLDR;** 🤯🤯🤯 It's almost impossible to do that because Apple don't want you to. 
{: .notice--danger}

### Conclusion 
Analyzing the app requires a lot of time, knowledge and expertise. 
Not everyone can do this kind of analysis because you need to know the platform, Apple's security and how to bypass them. 
It is nevertheless interesting to look into it (if you have the time and the money) to identify the strengths and weaknesses of the app.


AppScan has developped a methodology to analyze an App and a service to apply this to any App **faster than anyone** and **without source code**.
<a class="btn btn--success" style="margin-top:20px" href="/pricing.html">Discover AppScan offers</a>{: .align-center}
{: .notice--success}