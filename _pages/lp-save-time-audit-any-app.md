---
title: "Save time on each application audit"
permalink: /save-time-on-each-application-audit.html
layout: splash
author_profile: false
image: /assets/images/illustrations/appscan-apps-painting-style.png
header:
    overlay_filter: 0.5 # same as adding an opacity of 0.5 to a black background
    overlay_image: /assets/images/illustrations/appscan-apps-painting-style.png
intro: 
  - excerpt: "A master tool to audit any App, it includes many time-consuming analyses: auditing libraries, checking permissions, checking universal links, analyzing translations, measuring the app's weight distribution, discovering potential security risks."
feature_row_1:
  - image_path: /assets/images/illustrations/appscan-books.png
    alt: "Audit the libraries"
    title: "Audit the libraries"
    excerpt: "It's so long to check each librairie one by one, find the Github project, have a look on the project activity, validate the vitality of the project and verify the licence."

feature_row_2:
  - image_path: /assets/images/illustrations/appscan-app-technologies.png
    alt: "Audit App Permissions"
    title: "Audit App Permissions"
    excerpt: "Do you really know if you are using the right permissions? Check outdated permissions, check missing permissions."

feature_row_3:
  - image_path: /assets/images/illustrations/appscan-basket-blue.png
    alt: "Audit universal links and associated domains"
    title: "Audit universal links and associated domains"
    excerpt: "It's a pain to investigate those issues, validating the Apple association file configuration on every associated domains you want. The tool checks the apple-app-site-association."

feature_row_4:
  - image_path: /assets/images/illustrations/appscan-books.png
    alt: "Audit your App localizations and languages"
    title: "Audit your App localizations and languages"
    excerpt: "Check the supported languages, the .strings files, the .stringDict files, discover missing localizable files, missing localizable keys, ensure the compatibility with your third party librairies"

feature_row_5:
  - image_path: /assets/images/illustrations/appscan-apps.png
    alt: "Audit the App packaging (resources)"
    title: "Audit the App packaging"
    excerpt: "Scan all the App resources, check the images supports (missing scales or assets), discover risky files, bad imports."

feature_row_6:
  - image_path: /assets/images/illustrations/appscan-secrets.png
    alt: "Audit App Security"
    title: "Audit App Security"
    excerpt: "This is a light inspection, we are using a static analyis of the compiled application but the tool is checking some classic parameters : AppTransportSecurity configuration, package resources to see if files are risky or not, a the possibility to discover alternative environements (with less security controls)."


---

{% include feature_row id="intro" type="center" %}

{% include feature_row id="feature_row_1" type="left" %}

{% include feature_row id="feature_row_3" type="right" %}

{% include feature_row id="feature_row_6" type="left" %}

{% include feature_row id="feature_row_4" type="right" %}

{% include feature_row id="feature_row_5" type="left" %}

{% include feature_row id="feature_row_2" type="right" %}
