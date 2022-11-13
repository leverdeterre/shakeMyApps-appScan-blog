---
title: "How to audit a mobile App?"
permalink: /how-to-audit-an-ios-app.html
layout: single
author_profile: false
image: /assets/images/illustrations/appscan-complex-problem.png
header:
    overlay_filter: 0.5 # same as adding an opacity of 0.5 to a black background
    overlay_image: /assets/images/illustrations/appscan-complex-problem.png
---

Auditing an app is a long and meticulous thing. It requires time and expertise and most of the time you need to own the code and be able to share it. 
  
AppScan has created the first solution able to analyze an app **faster than anyone** and **without source code**.

<a class="btn btn--success" href="/pricing.html">Discover AppScan offers</a>

# How to audit a mobile App?

## Why audit an App? 
Making an app takes time and money.  
No matter what technology you use: Native, Cross Platform or No-Low code, it will result in the creation of an App, which will be submitted as a package to Apple. 
It will eventually be available on the AppStore, and you will have to maintain it for many years.

Therefore, the reasons for doing an audit can be numerous: 
- 🐛 Presence of too many bugs, we want to understand why, 
- 🤯 Developers have difficulty in producing new features, are there architectural problems? poor code quality? bad technical choices?)
- 😘 App owners want to be reassured about technical choices. 
- 💰 Investors too and maybe they are even interested in the competitors.

## The full audit of an App (with source code):
Someone external is commissioned to analyze the App. 
The source code of the app will be provided to him and he will apply his own methodology to analyze the application. 
After a few months, he will provide a report of the audit. 

👍 Pros: 
- It is important to have an objective view of your App
- A vision of your strengths and weaknesses

👎 Cons:
- **It's worrying** because you have to share your source code, your secrets
- **It is expensive**. It requires a considerable amount of time for analysis and interpretation by someone who is an expert in the field.
- **It requires trust**, are we sure it is well done? 
  
### How to evaluate the technical quality
**◻ Development methodology** : study how the development of the app is organized. The sources management, the gitflow, the commit messages, the merge of the requests, the peer reviews. 
**◻ Code organization** : analyze how the code is organizd on the sources.
**◻ App architecture** : study the structures, classes, a good usage of Design Patterns, modules, libraries, dependencies.
**◻ Syntaxic rules** : check if the code is nice. Styleguides and naming conventions are applied?
**◻ Semantic rules** : complexity rules, algorithms optimizations 
**◻ Security** : [apply audit security checks](#the-security-audit)
  
The tools to do that: 
- [Xcode](https://developer.apple.com/xcode/)
- [SwiftLint](https://github.com/realm/SwiftLint)
- [OCLint](https://oclint.org)
- [SonarQube](https://www.sonarqube.org)


## The security audit (without app sources)
Someone external is commissioned to analyze the App. 
After a few months, he will provide a report of the audit. 
👍 Pros: 
- It is important to have an expert view for that domain

👎 Cons:
- **It is expensive**. It requires a considerable amount of time for analysis and interpretation by someone who is an expert in the field.
- **It requires trust**, are we sure it is well done? 
  
  
### Security by Apple  
Apple has set the bar very, very high in terms of security.
You can have a look to the official guide of Apple ([apple platform security guide](https://help.apple.com/pdf/security/en_US/apple-platform-security-guide.pdf) or review the [the OWASP - iOS Platform Overview](https://mobile-security.gitbook.io/mobile-security-testing-guide/ios-testing-guide/0x06a-platform-overview) to undestand.

**System & device protection:** 
- [secure enclave](https://support.apple.com/fr-fr/guide/security/sec59b0b31ff/web) 
- [secure boot chain](https://support.apple.com/fr-fr/guide/security/secb3000f149/web) 
- [root access / jailbreak](https://en.wikipedia.org/wiki/IOS_jailbreaking)

**App packaging protections:** 
- complexity/impossibility to get an ipa
- binary encryption 
- complex binary decryption 

**data protection**
- sandbox
- maximum security on network exchanges by default
- data access security (permissions)

### Evaluate the security
**◻ data exchanges** : Validate how the data are exchange between the App and the network. 
**◻ securize the storage information** : Validate how the data is stored and persisted
**◻ root detection** : Check the risks of reverse engineering. 

This can be summarized as :
- securing data exchanges, 
- securize the storage information
- limiting the risks of reverse engineering. 
  
In reality, it is complex to implement because it requires an excellent knowledge of the platform and existing flaws.

### Audit tools
**Testing Guide**
[The OWASP Mobile Security Testing Guide](https://mobile-security.gitbook.io/mobile-security-testing-guide/)

**Decrypt ipa**
[frida-ios-dump](https://github.com/AloneMonkey/frida-ios-dump)
[Clutch](https://github.com/KJCracks/Clutch)

**All in one tool**
[MobSF](https://github.com/MobSF/Mobile-Security-Framework-MobSF)

## Discover the AppScan solution 

<a class="btn btn--success" href="/pricing.html">Discover AppScan offers</a>
