=== Pride Bar ===
Contributors: dartiss
Donate link: https://artiss.blog/donate
Tags: flag, pride, rainbow, gay, lgbt
Requires at least: 4.6
Tested up to: 6.5
Requires PHP: 7.4
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add an LGBTQIA+ flag design to your admin bar.

== Description ==

Add an LGBTQIA+ flag design to your admin bar.

Originally added to WordPress.com and viewable by Australian users to support marriage equality, I have bought the rainbow flag to everyone's Admin Bar, via this plugin. 

But that's not all, as it now supports 47 different flags...

1. Aceflux
2. Acespec
3. Aftgender
4. Agender
5. Aplatonic
6. Aroace
7. Arospec (was Aromantic)
8. Asexual
9. Bigender
10. Bisexual
11. Ceterosexual
12. Demiboy
13. Demifluid
14. Demigender
15. Demigirl
16. Demineutrois
17. Deminonbinary
18. Demixenogender
19. Femme
20. Fraysexual
21. Gay Men
22. Gender Nonconforming
23. Genderfae
24. Genderfluid
25. Genderflux
26. Genderqueer
27. Greysexual
28. Hijra
29. Intersex
30. Lesbian (5 stripe)
31. Lesbian (7 stripe)
32. Lipstick Lesbian
33. Monosexual
34. Multisexual
35. Neutrois
36. Non-binary
37. Omnisexual
38. Pangender
39. Pansexual
40. Polysexual
41. Pomosexual
42. Pride (Gilbert Baker)
43. Pride (More Colour More Pride)
44. Pride (Traditional)
45. Queer
46. Quintgender
47. Transgender

And, thanks to code by [Mika Epstein](https://halfelf.org/2017/make-wordpress-gay/ "Make WordPress Gay"), you can modify the positioning of the flag too - allow it to flow behind your Admin Bar menu options or go around it.

How to use? Just install, activate and enjoy a new flag colored admin bar. Different designs are available - head to Settings -> General -> Pride Bar to change the flag and positioning.

Thanks to for Michael Arestad for writing the original code and Pento [for sharing it](https://gist.github.com/pento/bc4574b8eb0f4500efbeb75ec7d8630c). And particularly to the LGBTQIA+ community for having such awesome symbols.

Iconography is courtesy of the very talented [Janki Rathod](https://www.fiverr.com/jankirathore).

**Please visit the [Github page](https://github.com/dartiss/pride-bar "Github") for the latest code development, planned enhancements and known issues**

== Installation ==

Pride Bar can be found and installed via the Plugin menu within WordPress administration (Plugins -> Add New). Alternatively, it can be downloaded from WordPress.org and installed manually...

1. Upload the entire `pride-bar` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress administration.

Voila! It's ready to go.

== Frequently Asked Questions ==

= Can I submit my own theme? =

Yes you can. If you take a look at the plugin folder, you'll see a sub-folder named `css` - in that is the CSS for each theme. Simply modify one of those to your taste then, if you'd like to share it, send it along to me and I'll look to include it in future releases, complete with its own unique name.

== Screenshots ==

1. The rainbow flag positioned across the menus
2. The rainbow flag positioned behind the menus
3. The bisexual flag

== Changelog ==

I use semantic versioning, with the first release being 1.0.

= 1.4 =
* Enhancement: No visible changes but I've split the plugin into a number of smaller files as it was getting too large and difficult to maintain

= 1.3.2 =
* Enhancement: Made some minor code quality improvements

= 1.3.1 =
* Bug: As Snoop Dogg once said, "it's amazing how much trouble you can get in for mis-placed hash". Okay, he didn't say that but you can imagine it, right? Yeah, I put a hash symbol somewhere where it shouldn't have been and broke the Monosexual style. Ironically, the result was that it appeared as just a single color

= 1.3 =
* Bug: I didn't add Intersex last time around, despite stating I had. Now added
* Bug: Fixed some escaping that wasn't correct
* Enhancement: One year later and it's Pride month once again. Time to add more styles. 14 more, to be precise
* Enhancement: Improved some wording

= 1.2 =
* Enhancement: It's Pride month, so what better time to add 18 more styles, more than doubling the number available?
* Enhancement: Added a link to the settings page so that you can request additional styles to be added
* Enhancement: Code efficiency improvements
* Maintenance: Renamed the LBGT style to Pride (Traditional)

= 1.1 =
* Enhancement: Added option to define whether the flag appears behind or inline with the admin bar menu options
* Enhancement: Instead of just the LGBT pride flag, this now supports 14 different flags from the community
* Enhancement: The menu bar text colour will inverse when certain flags are used, allowing them to be more readable
* Enhancement: CSS is now added to the page header in-line, due to it being generated on-the-fly
* Maintenance: Updated README text as well as the uninstaller (to get rid of the new, second setting upon removal)

= 1.0.4 =
* Enhancement: Not only follows all of the WordPress coding standards but also the gold-standard WP VIP standards too. This is one well written plugin, even if I do say so myself
* Enhancement: Improved the plugin meta data and added donation information in. Just because

= 1.0.3 =
* Bug: Fixed PHP errors that occurred upon first activation

= 1.0.2 =
* Enhancement: CSS is now compressed
* Enhancement: Further code quality enhancements made

= 1.0.1 =
* Enhancement: Code quality enhancements to bring it in line with WordPress.com VIP coding standards

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.4 =
* Split code into smaller files for future maintainability