<?php
date_default_timezone_set('Europe/Paris');
	if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])){
		header('HTTP/1.1 304 Not Modified');
        die();
	}
header("Content-Type: text/plain");	
header('Cache-control: max-age='.(60*60*24*365*4));
header('Expires: '.gmdate(DATE_RFC1123,time()+60*60*24*365*4));
header('Last-Modified: '.gmdate(DATE_RFC1123,time()));

echo "User-Agent: *\n";
echo "Allow: /\n";
echo "User-agent: Yandex\n";
echo "Disallow: /\n";
echo "User-agent: sitecheck.internetseer.com\n";
echo "Disallow: /\n";
echo "User-agent: Fetch\n";
echo "Disallow: /\n";
echo "User-agent: Offline Explorer\n";
echo "Disallow: /\n";
echo "User-agent: Teleport\n";
echo "Disallow: /\n";
echo "User-agent: MSIECrawler\n";
echo "Disallow: /\n";
echo "User-agent: SiteSnagger\n";
echo "Disallow: /\n";
echo "User-agent: WebStripper\n";
echo "Disallow: /\n";
echo "User-agent: TeleportPro\n";
echo "Disallow: /\n";
echo "User-agent: WebZIP\n";
echo "Disallow: /\n";
echo "User-agent: linko\n";
echo "Disallow: /\n";
echo "User-agent: HTTrack\n";
echo "Disallow: /\n";
echo "User-agent: libwww\n";
echo "Disallow: /\n";
echo "User-agent: Microsoft.URL.Control\n";
echo "Disallow: /\n";
echo "User-agent: Xenu\n";
echo "Disallow: /\n";
echo "User-agent: larbin\n";
echo "Disallow: /\n";
echo "User-agent: ZyBORG\n";
echo "Disallow: /\n";
echo "User-agent: WebReaper\n";
echo "Disallow: /\n";
echo "User-agent: Download Ninja\n";
echo "Disallow: /\n";
echo "User-agent: wget\n";
echo "Disallow: /\n";
echo "User-agent: grub-client\n";
echo "Disallow: /\n";
echo "User-agent: k2spider\n";
echo "Disallow: /\n";
echo "User-agent: NPBot\n";
echo "Disallow: /\n";
echo "User-agent: Gaisbot\n";
echo "Disallow: /\n";
echo "User-agent: Aqua_Products\n";
echo "Disallow: /\n";
echo "User-agent: asterias\n";
echo "Disallow: /\n";
echo "User-agent: b2w/0.1\n";
echo "Disallow: /\n";
echo "User-agent: BackDoorBot/1.0\n";
echo "Disallow: /\n";
echo "User-agent: Black Hole\n";
echo "Disallow: /\n";
echo "User-agent: BlowFish/1.0\n";
echo "Disallow: /\n";
echo "User-agent: Bookmark search tool\n";
echo "Disallow: /\n";
echo "User-agent: BotALot\n";
echo "Disallow: /\n";
echo "User-agent: BuiltBotTough\n";
echo "Disallow: /\n";
echo "User-agent: Bullseye/1.0\n";
echo "Disallow: /\n";
echo "User-agent: BunnySlippers\n";
echo "Disallow: /\n";
echo "User-agent: Cegbfeieh\n";
echo "Disallow: /\n";
echo "User-agent: CheeseBot\n";
echo "Disallow: /\n";
echo "User-agent: CherryPicker\n";
echo "Disallow: /\n";
echo "User-agent: CherryPicker /1.0\n";
echo "Disallow: /\n";
echo "User-agent: CherryPickerElite/1.0\n";
echo "Disallow: /\n";
echo "User-agent: CherryPickerSE/1.0\n";
echo "Disallow: /\n";
echo "User-agent: CopyRightCheck\n";
echo "Disallow: /\n";
echo "User-agent: cosmos\n";
echo "Disallow: /\n";
echo "User-agent: Crescent\n";
echo "Disallow: /\n";
echo "User-agent: Crescent Internet ToolPak HTTP OLE Control v.1.0\n";
echo "Disallow: /\n";
echo "User-agent: DittoSpyder\n";
echo "Disallow: /\n";
echo "User-agent: dotbot \n";
echo "Disallow: / \n";
echo "User-agent: EmailCollector\n";
echo "Disallow: /\n";
echo "User-agent: EmailSiphon\n";
echo "Disallow: /\n";
echo "User-agent: EmailWolf\n";
echo "Disallow: /\n";
echo "User-agent: EroCrawler\n";
echo "Disallow: /\n";
echo "User-agent: ExtractorPro\n";
echo "Disallow: /\n";
echo "User-agent: FairAd Client\n";
echo "Disallow: /\n";
echo "User-agent: Flaming AttackBot\n";
echo "Disallow: /\n";
echo "User-agent: Foobot\n";
echo "Disallow: /\n";
echo "User-agent: Gaisbot\n";
echo "Disallow: /\n";
echo "User-agent: GeoHasher\n";
echo "Disallow: /\n";
echo "User-agent: GetRight/4.2\n";
echo "Disallow: /\n";
echo "User-agent: grub\n";
echo "Disallow: /\n";
echo "User-agent: grub-client\n";
echo "Disallow: /\n";
echo "User-agent: Harvest/1.5\n";
echo "Disallow: /\n";
echo "User-agent: hloader\n";
echo "Disallow: /\n";
echo "User-agent: httplib\n";
echo "Disallow: /\n";
echo "User-agent: humanlinks\n";
echo "Disallow: /\n";
echo "User-agent: ia_archiver\n";
echo "Disallow: /\n";
echo "User-agent: ia_archiver/1.6\n";
echo "Disallow: /\n";
echo "User-agent: InfoNaviRobot\n";
echo "Disallow: /\n";
echo "User-agent: Iron33/1.0.2\n";
echo "Disallow: /\n";
echo "User-agent: JennyBot\n";
echo "Disallow: /\n";
echo "User-agent: Kenjin Spider\n";
echo "Disallow: /\n";
echo "User-agent: Keyword Density/0.9\n";
echo "Disallow: /\n";
echo "User-agent: larbin\n";
echo "Disallow: /\n";
echo "User-agent: LexiBot\n";
echo "Disallow: /\n";
echo "User-agent: libWeb/clsHTTP\n";
echo "Disallow: /\n";
echo "User-agent: LinkextractorPro\n";
echo "Disallow: /\n";
echo "User-agent: LinkScan/8.1a Unix\n";
echo "Disallow: /\n";
echo "User-agent: LinkWalker\n";
echo "Disallow: /\n";
echo "User-agent: LNSpiderguy\n";
echo "Disallow: /\n";
echo "User-agent: lwp-trivial\n";
echo "Disallow: /\n";
echo "User-agent: lwp-trivial/1.34\n";
echo "Disallow: /\n";
echo "User-agent: Mata Hari\n";
echo "Disallow: /\n";
echo "User-agent: Microsoft URL Control\n";
echo "Disallow: /\n";
echo "User-agent: Microsoft URL Control - 5.01.4511\n";
echo "Disallow: /\n";
echo "User-agent: Microsoft URL Control - 6.00.8169\n";
echo "Disallow: /\n";
echo "User-agent: MIIxpc\n";
echo "Disallow: /\n";
echo "User-agent: MIIxpc/4.2\n";
echo "Disallow: /\n";
echo "User-agent: Mister PiX\n";
echo "Disallow: /\n";
echo "User-agent: MLBot\n";
echo "Disallow: /\n";
echo "User-agent: moget\n";
echo "Disallow: /\n";
echo "User-agent: moget/2.1\n";
echo "Disallow: /\n";
echo "User-agent: mozilla/4\n";
echo "Disallow: /\n";
echo "User-agent: Mozilla/4.0 (compatible; BullsEye; Windows 95)\n";
echo "Disallow: /\n";
echo "User-agent: Mozilla/4.0 (compatible; MSIE 4.0; Windows 2000)\n";
echo "Disallow: /\n";
echo "User-agent: Mozilla/4.0 (compatible; MSIE 4.0; Windows 95)\n";
echo "Disallow: /\n";
echo "User-agent: Mozilla/4.0 (compatible; MSIE 4.0; Windows 98)\n";
echo "Disallow: /\n";
echo "User-agent: Mozilla/4.0 (compatible; MSIE 4.0; Windows ME)\n";
echo "Disallow: /\n";
echo "User-agent: Mozilla/4.0 (compatible; MSIE 4.0; Windows NT)\n";
echo "Disallow: /\n";
echo "User-agent: Mozilla/4.0 (compatible; MSIE 4.0; Windows XP)\n";
echo "Disallow: /\n";
echo "User-agent: mozilla/5\n";
echo "Disallow: /\n";
echo "User-agent: MSIECrawler\n";
echo "Disallow: /\n";
echo "User-agent: NetAnts\n";
echo "Disallow: /\n";
echo "User-agent: NetMechanic\n";
echo "Disallow: /\n";
echo "User-agent: NICErsPRO\n";
echo "Disallow: /\n";
echo "User-agent: Offline Explorer\n";
echo "Disallow: /\n";
echo "User-agent: Openbot\n";
echo "Disallow: /\n";
echo "User-agent: Openfind \n";
echo "Disallow: /\n";
echo "User-agent: Openfind data gathere\n";
echo "Disallow: /\n";
echo "User-agent: Oracle Ultra Search\n";
echo "Disallow: /\n";
echo "User-agent: PerMan\n";
echo "Disallow: /\n";
echo "User-agent: ProPowerBot/2.14\n";
echo "Disallow: /\n";
echo "User-agent: ProWebWalker\n";
echo "Disallow: /\n";
echo "User-agent: psbot\n";
echo "Disallow: /\n";
echo "User-agent: Python-urllib\n";
echo "Disallow: /\n";
echo "User-agent: QueryN Metasearch\n";
echo "Disallow: /\n";
echo "User-agent: Radiation Retriever 1.1\n";
echo "Disallow: /\n";
echo "User-agent: RepoMonkey\n";
echo "Disallow: /\n";
echo "User-agent: RepoMonkey Bait & Tackle/v1.01\n";
echo "Disallow: /\n";
echo "User-agent: RMA\n";
echo "Disallow: /\n";
echo "User-agent: searchpreview\n";
echo "Disallow: /\n";
echo "user-agent: sitebot\n";
echo "disallow: /\n";
echo "User-agent: SiteSnagger\n";
echo "Disallow: /\n";
echo "User-agent: SpankBot\n";
echo "Disallow: /\n";
echo "User-agent: spanner\n";
echo "Disallow: /\n";
echo "User-agent: suzuran\n";
echo "Disallow: /\n";
echo "User-agent: Szukacz/1.4 \n";
echo "Disallow: /\n";
echo "User-agent: Teleport\n";
echo "Disallow: /\n";
echo "User-agent: TeleportPro\n";
echo "Disallow: /\n";
echo "User-agent: Telesoft\n";
echo "Disallow: /\n";
echo "User-agent: The Intraformant\n";
echo "Disallow: /\n";
echo "User-agent: TheNomad\n";
echo "Disallow: /\n";
echo "User-agent: TightTwatBot\n";
echo "Disallow: /\n";
echo "User-agent: Titan\n";
echo "Disallow: /\n";
echo "User-agent: toCrawl/UrlDispatcher\n";
echo "Disallow: /\n";
echo "User-agent: True_Robot\n";
echo "Disallow: /\n";
echo "User-agent: True_Robot/1.0\n";
echo "Disallow: /\n";
echo "User-agent: turingos\n";
echo "Disallow: /\n";
echo "User-agent: UbiCrawler\n";
echo "Disallow: /\n";
echo "User-agent: URL Control\n";
echo "Disallow: /\n";
echo "User-agent: URL_Spider_Pro\n";
echo "Disallow: /\n";
echo "User-agent: URLy Warning\n";
echo "Disallow: /\n";
echo "User-agent: VCI\n";
echo "Disallow: /\n";
echo "User-agent: VCI WebViewer VCI WebViewer Win32\n";
echo "Disallow: /\n";
echo "User-agent: Web Image Collector\n";
echo "Disallow: /\n";
echo "User-agent: WebAuto\n";
echo "Disallow: /\n";
echo "User-agent: WebBandit\n";
echo "Disallow: /\n";
echo "User-agent: WebBandit/3.50\n";
echo "Disallow: /\n";
echo "User-agent: WebCopier\n";
echo "Disallow: /\n";
echo "User-agent: WebEnhancer\n";
echo "Disallow: /\n";
echo "User-agent: WebmasterWorldForumBot\n";
echo "Disallow: /\n";
echo "User-agent: WebSauger\n";
echo "Disallow: /\n";
echo "User-agent: Website Quester\n";
echo "Disallow: /\n";
echo "User-agent: Webster Pro\n";
echo "Disallow: /\n";
echo "User-agent: WebStripper\n";
echo "Disallow: /\n";
echo "User-agent: WebZip\n";
echo "Disallow: /\n";
echo "User-agent: WebZip/4.0\n";
echo "Disallow: /\n";
echo "User-agent: Wget\n";
echo "Disallow: /\n";
echo "User-agent: Wget/1.5.3\n";
echo "Disallow: /\n";
echo "User-agent: Wget/1.6\n";
echo "Disallow: /\n";
echo "User-agent: WWW-Collector-E\n";
echo "Disallow: /\n";
echo "User-agent: Xenu's\n";
echo "Disallow: /\n";
echo "User-agent: Xenu's Link Sleuth 1.1c\n";
echo "Disallow: /\n";
echo "User-agent: Yahoo Pipes\n";
echo "Disallow: /  \n";
echo "User-agent: Yahoo Pipes 2.0\n";
echo "Disallow: /\n";
echo "User-agent: Zao\n";
echo "Disallow: /\n";
echo "User-agent: Zealbot\n";
echo "Disallow: /\n";
echo "User-agent: Zeus\n";
echo "Disallow: /\n";
echo "User-agent: Zeus 32297 Webster Pro V2.9 Win32\n";
echo "Disallow: /\n";
echo "User-agent: Zeus Link Scout\n";
echo "Disallow: /\n";
echo "User-agent: Baiduspider\n";
echo "Disallow: /\n";
echo "User-agent: Baiduspider+(+http://www.baidu.com/search/spider.htm)\n";
echo "Disallow: /\n";
echo "User-agent: Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)\n";
echo "Disallow: /\n";
echo "User-Agent: AhrefsBot\n";
echo "Disallow: /\n";
echo "User-Agent: Bender\n";
echo "Disallow:/ \n";
echo "User-agent: MJ12bot\n";
echo "Disallow: /\n";
echo "User-Agent: MSIECrawler\n";
echo "Disallow: /\n";
echo "User-agent: BLEXBot\n";
echo "Disallow: /\n";


echo "sitemap\n";
echo "http://".$_SERVER['SERVER_NAME']."/sitemap.xml\n";
echo "http://".$_SERVER['SERVER_NAME']."/sitemap-index.xml\n";
echo "http://".$_SERVER['SERVER_NAME']."/imagesitemap-index.xml\n";
