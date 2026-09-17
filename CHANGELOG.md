# Changelog

All notable changes to Piraeus Bank WooCommerce Payment Gateway (maintained fork) are documented here.
The format follows [Keep a Changelog](https://keepachangelog.com/en/1.1.0/).

Versions 3.2.0 and earlier are upstream releases by Papaki (Enartia S.A.).

## [3.3.0] - 2026-09-04

### Added

- "Payment brands to display" setting: pick from Visa, Mastercard, Maestro, American Express, Diners Club, Google Pay and IRIS. Clear it to fall back to the Piraeus Bank logo.
- Record wallet payments: the callback now reads the Redirection v3.1 PanCardType field and notes Google Pay (DPAN) on the order.
- Store the detected method in the `_piraeusbank_payment_method` order meta (`card`, `iris`, `googlepay`).

### Changed

- Show the accepted payment brands as logos next to the gateway title, instead of describing them in the title text.
- Tested against WooCommerce 11.1 and WordPress 7.1.

### Fixed

- Billing state is no longer a required checkout field. It is optional in EMV 3DS, and stores that hide the field for single-region countries could not take card payments at all.

## [3.2.0] - upstream release

### Changed

- Code refactoring.

## [3.1.5] - upstream release

### Security

- 

## [3.1.4] - upstream release

### Changed

- IRIS payments
- With this version the IRIS payments can be completed successfully

## [3.1.3-beta] - upstream release

### Changed

- IRIS payments
- Beta version for testing purposes: Test the IRIS payments if they can be completed successfully

## [3.1.2] - upstream release

### Changed

- Fix installments issue

## [3.0.1] - upstream release

### Changed

- Introduced the possibility for Block Editor checkout blocks
- Make the card holder name optional in checkout
- Changed the hook for translations to be loaded because of WordPress 6.7 release
- Updated compatibilities with WordPress 6.7 and WooCommerce 9.4.2

## [2.0.7] - upstream release

### Changed

- Removed mandatory fields, updated Greek translation(s)

## [2.0.6] - upstream release

### Changed

- Removed optional text from cardholder name, which was added by woocommerce

## [2.0.5] - upstream release

### Changed

- Fixed an old bug that didn't allow paying with a different payment provider if the pireaus bank provider was set up with asking for the cardholder name

## [2.0.2] - upstream release

### Changed

- Fixed cardholder name field check when it was disabled

## [2.0.0] - upstream release

### Changed

- Updated code to PHP 7.4
- Updated code to match new wordpress and woocommerce changes
- Compatibility updates regarding 3dsecure

## [1.7.1] - upstream release

### Changed

- Fix bug in 1.7.0

## [1.7.0] - upstream release

### Changed

- Fix vulnerability for sql injection

## [1.6.5.1] - upstream release

### Changed

- Compatibility with Woocommerce 6.2.1

## [1.6.5] - upstream release

### Changed

- Added technical specs needed for the bank, rendered in the settings page
- Render error descriptions
- Update Translations
- Add option to enable/disable for the 2nd payment email with transaction details

## [1.6.4] - upstream release

### Changed

- Extra validations checks for phone numbers
- Compatibility with Woocommerce 5.0
- Add text for "without installation" option

## [1.6.3] - upstream release

### Changed

- Extra validations checks for phone numbers
- Add Germany's states list in woo commerce

## [1.6.2] - upstream release

### Changed

- Add cardholder name input field in checkout
- Extra validation for foreign countries state field
- Add cyprus states list in woocommerce
- Add debugging mode, to log certain information
- Replaced deprecated reduce_order_stock with wc_reduce_stock_levels
- Fix minor php warnings

## [1.6.1] - upstream release

### Changed

- Extra validation for country calling number
- Extra fallback if no shipping address available
- Add transaction id in order note

## [1.6.0] - upstream release

### Changed

- Compatibility with PSD2 (3D Secure version 2)

## [1.5.8] - upstream release

### Changed

- Fix an issue with proxy settings

## [1.5.7] - upstream release

### Changed

- Sanitize Data
- Update compatibility status with WooCommerce 4.3.0

## [1.5.6] - upstream release

### Changed

- Update compatibility status with WooCommerce 4.1.0

## [1.5.5] - upstream release

### Changed

- Update compatibility status with WooCommerce 4

## [1.5.4] - upstream release

### Changed

- Fix release version

## [1.5.3] - upstream release

### Changed

- Update translations

## [1.5.2] - upstream release

### Changed

- Added max size for Logo of Piraeus Bank

## [1.5.1] - upstream release

### Changed

- For downloadable products, auto mark the order as completed only if all the products are downloadable
- Update translations
- Added option to display or not Piraeus Bank's logo in checkout page.

## [1.5.0] - upstream release

### Changed

- POST response method is now available
- Added Max number of instalments based on order total
- Support for English, German and Russian language in redirect page.

## [1.4.2] - upstream release

### Changed

- Fix issue for failed status of order but with paid transaction

## [1.4.1] - upstream release

### Changed

- Bug Fixes (Pay again, after failed payment attempt)

## [1.4.0] - upstream release

### Changed

- New Piraeus API encryption algorithm

## [1.3] - upstream release

### Changed

- Added Proxy configuration option.

## [1.0.6] - upstream release

### Changed

- WooCommerce backwards compatible

## [1.0.4] - upstream release

### Changed

- WooCommerce 3.0 compatible

## [1.0.3] - upstream release

### Changed

- Text changed. New Title[GR]: Με κάρτα μέσω Πειραιώς

## [1.0.2] - upstream release

### Changed

- Bug Fixes

## [1.0.1] - upstream release

### Changed

- Bug Fixes

## [1.0.0] - upstream release

### Changed

- Initial Release
