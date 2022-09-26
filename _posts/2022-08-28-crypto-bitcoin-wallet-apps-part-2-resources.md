---
title: "Crypto Apps - Benchmark - Part 2 - Resources"
description: Technical analysis of crypto Apps resources, assets & languages management.
permalink: appscan-crypto-apps-part-2-resources.html
categories:
  - Audits
  - Benchmark
  - App Resources

tags:
  - assets
  - strings
  - stringDict
  - languages
  - lproj

image: /assets/images/illustrations/appscan-cryptos-snow.png
header:
    overlay_image: /assets/images/illustrations/appscan-cryptos-snow.png
---

Apps relative to crypto are very recent.
We wanted to study those Apps to make an smart article about technical stacks & good practices.

What are the good things?

What are the bad things in those about?
  
What are the important points if you want to start to build a new App?

  
To study those questions we have decided to take the most trendy applications and to compare them on technical aspects
 
This article is the second of the serie :
- [Part 1 - Introduction]({% post_url 2022-08-27-crypto-bitcoin-wallet-apps-part-1-introduction %}) 
- 👉 [Part 2 - Resources]({% post_url 2022-08-28-crypto-bitcoin-wallet-apps-part-2-resources %}) 
- [Part 3 - Interactions]({% post_url 2022-08-29-crypto-bitcoin-wallet-apps-part-3-interactions %}) 
- [Part 4 - Security]({% post_url 2022-08-30-crypto-bitcoin-wallet-apps-part-4-security %}) 
  
  
**TLDR;**

- There is native Apps and Apps developed using a cross plateform solutions.
- All Apps can provide a very rich User Experience and extends the system using App Extensions or interact with other Apps to improve the journey of a User.
- The applications are characterized by the number of interactions with the system and the possible interactions with other Apps.
- The packaging is really different depending on the technology of the application and this leads to resources not optimized and some security weaknesses.

  
# App Resources

In this section, we check to important metrics about the packaging of the App.
- How are managed the images? package in Assets? to be optimized by Apple on the App installation, or not?
- How is configured the language support? Permissions are well localized? Is there missing values? 

| App                                                                                                                               | AppScore | Details | 
| :---                                                                                                                              |  :---: |    :--- | 
| {% imagesize /assets/images/ios-apps/metamask.webp:img?width=50 alt='Metamask app icon' %} MetaMask - Blockchain Wallet           | 6     |  {::nomarkdown}<ul><li>✅ 40 languages</li><li>✅ Plurals management </li><li>✅ Images packaged in assets </li>  </ul>{:/}  |
| {% imagesize /assets/images/ios-apps/binance.webp:img?width=50 alt='Binance app icon' %} Binance: Buy Bitcoin & Crypto            | 5     |  {::nomarkdown}<ul><li>✅ 9 languages</li><li>❌ Localized strings Custom Flutter (JSON file) </li><li>✅ Images packaged in assets </li>  </ul>{:/}  | 
| {% imagesize /assets/images/ios-apps/crypto.com.webp:img?width=50 alt='Crypto.com app icon' %} Crypto.com - Buy Bitcoin, ETH      | 4.5   |  {::nomarkdown}<ul><li>✅ 20 languages</li><li>❌ Some missing translations detected </li> <li>✅ Images packaged in assets </li>  </ul>{:/}  | 
| {% imagesize /assets/images/ios-apps/coinmarkercap.webp:img?width=50 alt='coinmarkercap app icon' %} CoinMarketCap                | 4.5   |  {::nomarkdown}<ul><li>✅ 21 languages</li><li>❌ Some missing translations detected </li> <li>✅ Images packaged in assets </li>  </ul>{:/}  |  | 
| {% imagesize /assets/images/ios-apps/coinbase.webp:img?width=50 alt='coinbase app icon' %} Coinbase: Buy Bitcoin & Ether          | 3     |  {::nomarkdown}<ul><li>✅ 18 languages</li><li>❌ images not optimized in assets </li><li>❌ @1x/2x/@3x</li><li>❌ image scales missing</li></ul>{:/}  | 
| {% imagesize /assets/images/ios-apps/ftx.webp:img?width=50 alt='FTX app icon' %} FTX (anciennement Blockfolio)                    | 2.5   |  {::nomarkdown}<ul><li>✅ 18 languages</li><li>❌ images not optimized in assets </li><li>❌ @1x/2x/@3x</li><li>❌ image scales missing</li></ul>{:/}  | 
| {% imagesize /assets/images/ios-apps/zengo.webp:img?width=50 alt='zengo app icon' %} ZenGo: Crypto & Bitcoin Wallet               | 2.5   |  {::nomarkdown}<ul><li>❌ 1 language</li><li>❌ images not optimized in assets </li><li>❌ @1x/2x/@3x</li></ul>{:/}  | 
| {% imagesize /assets/images/ios-apps/etoro money.webp:img?width=50 alt='Etoro Money app icon' %} eToro Money                      | 2.5   |  {::nomarkdown}<ul><li>❌ no official language declared (but custom in App) </li><li>❌ images not optimized in assets </li><li>❌ @1x/2x/@3x</li></ul>{:/}| 

