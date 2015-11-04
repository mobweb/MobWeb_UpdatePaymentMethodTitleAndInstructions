# MobWeb_UpdatePaymentMethodTitleAndInstructions extension for Magento

This simple Magento extension allows to dynamically update a payment method's title and instructions during checkout. We use this to inform the customer regarding some payment details that depend on the order total, for example: If the subtotal is greater than N, use an alternative bank account.

## Installation

Install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/).

## Configuration

No configuration, but you will have to add your logic to `MobWeb_UpdatePaymentMethodTitleAndInstructions_Helper_Data::update()`.

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).