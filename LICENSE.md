
             Opencaching Implementation Version 3


                                                                  July 18, 2015

License Information

Copyright (C) 2006-2015  Opencaching Deutschland and Contributors

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA


In addition to the GNU GPL:

You have to name and/or link opencaching.de to your customers as 
original author of the used parts in your implementation.

This license is only valid for the source code and documents stored in the 
public Git repository. For data transfer to and from opencaching.de, see
the legal information at opencaching.de.

The Opencaching Deutschland logo, as it is contained in files like the
statistics pictures and rotator pictures overlay, is NOT licensed under GPL. 
Instead it is subject to a special license which can be obtained from 
Opencaching Deutschland. 

If you are using this source code to establish a geocache listing service
or some sort of service which can be compared with it, you agree to 
publish your geocaching data via XML Interface and/or OKAPI the same way
and under the same (or less restrictive) conditions as opencaching.de does;
see https://www.opencaching.de/doc/xml and https://www.opencaching.de/okapi.


A different license may apply to third party components being used.

List of third party components (cmp. customized-libs.txt):


PHP libraries
-------------

    1.  Smarty: Template Engine
        Path    : htdocs/lib2/smarty/
        URI     : http://www.smarty.net/
        License : LGPL 3.0

    2.  Smarty Gettext (modified)
        Path    : htdocs/src/Oc/SmartyPlugins/prefilter.t.php
        URI     : http://sourceforge.net/projects/smarty-gettext
        License : LGPL 2.1

    3.  RFC(2)822 Email Parser
        Path    : htdocs/lib/common.inc.php
                  htdocs/lib2/util.inc.php
        URI     : http://iamcal.com/publish/articles/php/parsing_email
        License : CC BY-SA 2.5 / GPL 3.0
        Author  : Cal Henderson

    4.  ImageBMP & ImageCreateFromBMP
        Path    : htdocs/lib2/imagebmp.inc.php
        URI:    : http://de77.com/php/load-and-save-bmp-in-php-imagecreatefrombmp-imagebmp
                  http://www.phpclasses.org/package/5991-PHP-Load-and-save-images-in-the-BMP-format.html
        License : MIT

    5.  Coordinate system translations
        Path    : htdocs/lib2/logic/coordinate.class.php
        URI     : http://www.helmutheimeier.privat.t-online.de/kt/phpscripts.html
        License : MIT

    6.  Point-in-polygon test
        Path    : htdocs/lib2/logic/gis.class.php
        URI     : http://dev.mysql.com/doc/refman/4.1/en/functions-that-test-spatial-relationships-between-geometries.html
        License : ??

    7.  Automatic Image Rotator
        Path    : resource2/ocstyle/images/head/rotator.php
        URI     : http://d.alistapart.com/randomizer/rotate.txt
        License : "freely available to all" (http://alistapart.com/about)

    8.  ss_zip class
        Path    : htdocs/lib2/ss_zip.php
        URI     : http://smiledsoft.com/demos/phpzip/  (no longer works?)
        License : ??

    9.  OKAPI: Opencaching API
        Path    : htdocs/okapi/
        URI     : http://code.google.com/p/opencaching-api/
        License : MIT, with exception of okapi/res/attribute icons which
                  are under Opencaching-GPL license

   10.  Net_IDNA2
        Path    : htdocs/lib2/Net/
        URI     : https://pear.php.net/package/Net_IDNA2
        Licens  : LGPL 2.1
        
   11.  PSH
        Path    : psh.phar
        URI     : https://github.com/shopwareLabs/psh
        Licens  : MIT

   12.  php-cs-fixer
        Path    : php-cs-fixer
        URI     : https://github.com/FriendsOfPHP/PHP-CS-Fixer
        Licens  : MIT



JavaScript libraries
--------------------

    1.  JavaScript, DHTML Tooltips
        Path    : htdocs/resource2/ocstyle/js/
        URI     : http://www.walterzorn.de/tooltip/tooltip.htm
        License : LGPL

    2.  Garmin Communicator API
        Path    : htdocs/resource2/ocstyle/js/
        URI     : http://developer.garmin.com/web/communicator-api-1.4/
        License : Apache 2.0

    3.  EnlargeIt!: A little Javascript enlarging thumbnail images with a mouse click.
        Path    : htdocs/resource2/ocstyle/js/enlargeit/
        URI     : http://enlargeit.timos-welt.de
        License : GPL 3.0

    4.  IE PNG Fix
        Path    : htdocs/resource2/ocstyle/css/iepngfix.htc
        URI     : http://www.twinhelix.com/css/iepngfix/
        License : LGPL 2.1

    5.  TinyMCE JavaScript WYSIWYG Editor
        Path    : htdocs/resource2/tinymce/
        URI     : http://tinymce.moxiecode.com/
        License : LGPL 2.1
        
    6.  Garmin Communicator Plugin API
        Path    : htdocs/resource2/ocstyle/js/communicator-api/
        URI     : http://www.garmindeveloper.com/web-device/garmin-communicator-plugin/
        License : Apache 2.0


Icons
-----

    1.  FamFamFam Flags
        Path    : htdocs/images/flags
        URI     : http://www.famfamfam.com/lab/icons/flags/
        License : Public domain

    2.  OKAPI cache icons
        Path    : htdocs/resource2/ocstyle/images/map/caches2/
        URI     : http://code.google.com/p/opencaching-pl/source/browse/#svn%2Ftrunk%2Fokapi%2Fstatic%2Ftilemap
        License : MIT

    3.  OpenIcons 'system-help' and 'preferences-other'
        Path    : htdocs/resource2/ocstyle/images/misc/
                  htdocs/resource2/ocstyle/images/map/
        URI     : http://openiconlibrary.sourceforge.net/gallery2/?./Icons/categories/system-help-3.png
                  http://openiconlibrary.sourceforge.net/gallery2/?./Icons/categories/preferences-other-3.png
        License : Creative Commons BY-SA 3.0
        Author  : Oxygen

    4.  16x16 Icons 'flag-checker', 'footprints', 'clock select', lock, list, offer
        Path    : htdocs/resource2/ocstyle/images/misc/
                  htdocs/resource2/ocstyle/images/map/caches2/
                  htdocs/resource2/ocstyle/images/cachestatus/
                  htdocs/resource2/ocstyle/images/action/
        URI     : http://www.softicons.com/free-icons/toolbar-icons/fugue-16px-additional-icons-2-by-yusuke-kamiyamane
        License : Creative Commons BY 3.0
        Author  : Yusuke Kamiyamane

    5.  gears and gps-device icons, watched icon
        Path    : htdocs/resource2/ocstyle/images/misc/
                  htdocs/resource2/ocstyle/images/viewcache/
        URI     : http://www.softicons.com/free-icons/toolbar-icons/fatcow-hosting-icons-by-fatcow/gear-in-icon
                  http://www.softicons.com/free-icons/web-icons/fatcow-hosting-additional-icons-by-fatcow/gps-handheld-icon
        License : Creative Commons BY 3.0
        Author  : FatCow

    6.  checkmark icon
        Path    : htdocs/resource2/ocstyle/images/misc/
        URI     : http://www.softicons.com/free-icons/web-icons/bremen-icons-by-pc.de/check-icon
        License : Creative Commons BY 3.0
        Author  : PC.DE

    7.  search icon
        Path    : htdocs/resource2/ocstyle/images/misc/
        URI     : http://www.softicons.com/free-icons/toolbar-icons/24x24-free-pixel-icons-by-aha-soft/search-icon
        License : Creative Commons BY-SA 3.0
        Author  : Aha-Soft

    8.  TinyMCE Icons
        Path    : htdocs/images/icons/
        URI     : http://tinymce.moxiecode.com/
        License : LGPL 2.1

    9.  Social media icons (feed, google+, facebook, twitter)
        Path    : htdocs/resource2/ocstyle/images/media/
        URI     : https://github.com/paulrobertlloyd/socialmediaicons
        License : Creative Commons BY-SA 3.0
        Author  : Paul Robert Lloyd (and other contributors)

   10.  Creative Commons Button
        Path    : htdocs/resource2/ocstyle/images/media/
        URI     : https://creativecommons.org/about/downloads
        License : Creative Commons BY 3.0
        Author  : Creative Commons

   11.  32x32 Archived icon
        Path    : htdocs/resource2/ocstyle/images/cachestatus/
        URI     : http://www.softicons.com/toolbar-icons/mono-basic-blue-icons-by-double-j-design/archive-icon
        License : Creative Commons BY 3.0
        Author  : Double-J Design


Other resources
---------------

    1.  In his hands: Font in old OC logo
        Path    : htdocs/resource2/ocstyle/images/
        URI     : http://www.fonts4free.net/in-his-hands-font.html
        Licence : "Free"

    2.  DejaVu fonts
        Path    : htdocs/lib2/fonts/dejavu-fonts/
        License : Bitstream

    3.  MultiFlex-2 CSS Design
        Path    : htdocs/resource2/ocstyle/css/
        URI     : http://www.openwebdesign.org/design/2876/MultiFlex21/
        License : Public Domain
        Author  : G. Wolfgang

    4.  Bootstrap 4.x Framework
        Path    : CDN Import htdocs/templates2/ocstyle/sys_main.tpl
        URI     : https://github.com/twbs/bootstrap/blob/v4.0.0-alpha.6/LICENSE
        License : MIT License
        Author  : Copyright (c) 2011-2017 Twitter, Inc.
                  Copyright (c) 2011-2017 The Bootstrap Authors


Data content
------------

see sql/static-data/static-data.txt on usage

    1.  OpenGeoDB
        URI     : http://sourceforge.net/projects/opengeodb/
        License : Public domain

    2.  NGA GEOnet Names Server (GNS)
        Source  : http://earth-info.nga.mil/gns/html/
        License : Public domain

    3.  NUTS boundaries
        URI     : http://epp.eurostat.ec.europa.eu/portal/page/portal/gisco_Geographical_information_maps/popups/references/administrative_units_statistical_units_1
        License : noncommercial, attribution
        Author  : Eurostat

    4.  Cracklib password list
        Path    : sql/static-data/pw_dict.bz2
        URI     : http://pecl.php.net/package/crack
        License : PHP
