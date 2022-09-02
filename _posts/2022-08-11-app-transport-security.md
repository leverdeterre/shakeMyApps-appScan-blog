---
title: "Apple Transport Security or not"
categories:
  - AppStore
  - Security
tags:
  - NSAllowsArbitraryLoads
  - 
---

On iOS, the network exchanges is an important layer of the security. 
This layer is used by the App when performing network requests with :
- URLSession, 
- URLConnection, 
- WKWebView loading, 
- Thirdparty librairies (Alamofire, AFNetworking)

Using our current database we have discovered that 48% of the iOS app have remove or disable this protection.

{% raw %}<img src="/assets/images/ATT-48pourcent.png" alt="" class="full">{% endraw %}
