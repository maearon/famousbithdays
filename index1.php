<?php
$conn=mysqli_connect("localhost","root","","sinhnhatnoitieng");
mysqli_query($conn,"SET NAMES utf8");
$sql = "select * from people where rank <13  ";
$sql0 = "select * from people where rank > 12 and rank <25  ";
$sql1 = "select * from people where rank > 24 and rank <37  ";
$sql2 = "select * from people where rank > 36 and rank <49  ";
$query =mysqli_query($conn,$sql);
$query0 =mysqli_query($conn,$sql0);
$query1 =mysqli_query($conn,$sql1);
$query2 =mysqli_query($conn,$sql2);
?>
<!-- connect -->
<!doctype html>
<html class="no-js" lang="">
<head>
<link rel="dns-prefetch" href="//c.amazon-adsystem.com/">
<link rel="dns-prefetch" href="//www.googletagservices.com/">
<link rel="dns-prefetch" href="//famousbirthdays-d.openx.net">
<link rel="dns-prefetch" href="//www.google-analytics.com/">
<link rel="dns-prefetch" href="//content.jwplatform.com/">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Người Phổ Biến Nhất | Sinh Nhật Nổi Tiếng </title>
<meta name="description" content="Discover the most popular people ranked based on our user activity. The page updates weekly with the list of the top 48 most popular celebs on our site.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="theme-color" content="#E4138E">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="image_src" href="/images/fbstar.png">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="manifest" href="/manifest.json">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="main.css">
<script>

    
    var useSSL = "https:" == document.location.protocol;
    var googletag = googletag || {};
//      amznads = amznads = amznads || {};
      windowWidthForAds = window.innerWidth
      szs = {
        
        m: 460,
        t: 767,
        ds: 990,
        dl: 990
        
      };

    var PREBID_TIMEOUT = windowWidthForAds > szs.t ? 900 : 1500;

    googletag.cmd = googletag.cmd || [];

    var pbjs = pbjs || {};
    pbjs.que = pbjs.que || [];


     function initAdserver() {
      if (pbjs.initAdserverSet) return;
      //load GPT library here
      (function () {
        var gads = document.createElement('script');
        gads.async = true;
        gads.type = 'text/javascript';
        var useSSL = 'https:' == document.location.protocol;
        gads.src = (useSSL ? 'https:' : 'http:') +
            '//www.googletagservices.com/tag/js/gpt.js';
        var node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(gads, node);
      })();
      pbjs.initAdserverSet = true;
     
    }

     // Load GPT when timeout is reached.
    setTimeout(initAdserver, PREBID_TIMEOUT);


    // Load the Prebid Javascript Library Async. We recommend loading it immediately after
    // the initAdserver() and setTimeout functions.
    (function () {
      var d = document;
      var pbs = d.createElement("script");
      pbs.type = "text/javascript";
      pbs.src = '/static/js/prebid.js?t20';
      var target = d.getElementsByTagName("head")[0];
      target.insertBefore(pbs, target.firstChild);
    })();

    pbjs.que.push(function() {
      var inc= pbjs.setPriceGranularity("high");
    });
    pbjs.que.push(function () {
      
      var adUnits = [
        {
          code: 'div-gpt-ad-1391210931444-0',
          sizes: (windowWidthForAds > szs.t ? [[970,90],[728,90]]:[[320,50]]),
          bids: [

          
                      
            {
              bidder: 'indexExchange',
              params: {
                id: "1",
                siteID: (windowWidthForAds > szs.t ? 184740 : 184747)
              }
            },
            
          
                      
            {
              bidder: 'appnexus',
              params: {
                 placementId: '9524040'
              }
            },
             
          
                      
            {
              bidder: 'sovrn',
              params: {
                 tagid: (windowWidthForAds > szs.t ? '395247' : '395535')
              }
            },
            
          
          
          
                    
                      
            {
              bidder: 'openx',
              params: {
                delDomain: 'famousbirthdays-d.openx.net', 
                unit: '538503811'
               }
            },
            
                    
                      
            {
              bidder: 'districtmDMX',
              params: {
                 id:  (windowWidthForAds > szs.t ? '141918' : '141818')
              }
            },
            
          
                      
            {
              bidder: 'conversant',
              params: {
                 site_id:  '111066',
                 secure: (useSSL ? true : false)
              }
            },
            
                    
                      
            {
              bidder: 'rubicon',
              params: {
                accountId:  '11638',
                siteId: '36192',
                zoneId: '632844'
              }
            },
            
                    
                      
            {
              bidder: 'audienceNetwork',
              params: {
                 placementId: '828742283953139_832434056917295'
              }
            },
            
          
          
          
          
          ]
        }

        
        ,{
          code: 'div-gpt-ad-1391216460869-2',
          sizes: (windowWidthForAds > szs.t ? (windowWidthForAds < szs.dl ? [[728,90]] : [[970,250],[970,90],[728,90]]) :[[300,250]]),
          bids: [

          
                      
            {
              bidder: 'indexExchange',
              params: {
                id: "2",
                siteID: (windowWidthForAds > szs.t ? 184741 : 184748)
              }
            },
            
          
                      
            {
              bidder: 'appnexus',
              params: {
                 placementId: '9524042'
              }
            },
            
          
                      
            {
              bidder: 'sovrn',
              params: {
                 tagid: (windowWidthForAds > szs.t ? '395248' : '395249')
              }
            },
            
          
          
          
                    
                      
            {
              bidder: 'openx',
              params: {
                delDomain: 'famousbirthdays-d.openx.net',
                unit: '538503809'
              }
            },
            
                    
                      
            {
              bidder: 'districtmDMX',
              params: {
                 id:  (windowWidthForAds > szs.t ? '141919' : '141820')
              }
            },
            
          
                      
            {
              bidder: 'conversant',
              params: {
                 site_id:  '111066',
                 secure: (useSSL ? true : false)
              }
            },
            
                    
                      
            {
              bidder: 'rubicon',
              params: {
                accountId:  '11638',
                siteId: '36192',
                zoneId: '632846'
              }
            },
            
          
                       
            {
              bidder: 'audienceNetwork',
              params: {
                 placementId: '828742283953139_832433603584007'
              }
            },
            
          
          
            
          
          ]
        }

            
       ,{
          code: 'div-gpt-ad-1423776989563-0',
          sizes: (windowWidthForAds > szs.t ? (windowWidthForAds < szs.dl ? [[728,90]] : [[970,250],[970,90],[728,90]]) :[[300,250]]),
          bids: [
          
                      
            {
              bidder: 'indexExchange',
              params: {
                id: "3",
                siteID: (windowWidthForAds > szs.t ? 184742 : 184749)
              }
            },
            
          
                      
            {
              bidder: 'appnexus',
              params: {
                 placementId: '9524023'
              }
            },
            
          
                      
            {
              bidder: 'sovrn',
              params: {
                 tagid: (windowWidthForAds > szs.t ? '395536' : '395250')
              }
            },
            
          
          
          
                    
                      
            {
              bidder: 'openx',
              params: {
                delDomain: 'famousbirthdays-d.openx.net',
                unit: '538503808'
              }
            },
            
                    
                      
            {
              bidder: 'districtmDMX',
              params: {
                 id:  (windowWidthForAds > szs.t ? '141917' : '141819')
              }
            },
            
          
                      
            {
              bidder: 'conversant',
              params: {
                 site_id:  '111066',
                 secure: (useSSL ? true : false)
              }
            },
            
                    
                      
            {
              bidder: 'rubicon',
              params: {
                accountId:  '11638',
                siteId: '36192',
                zoneId: '632842'
              }
            },
            
          
                      
            {
              bidder: 'audienceNetwork',
              params: {
                 placementId: '828742283953139_832432453584122'
              }
            },
            
          
          
          
          
          ]
        }

            
        ,{
          code: 'div-gpt-ad-1391216734145-1',
          sizes: (windowWidthForAds > szs.t ? (windowWidthForAds < szs.dl ? [[728,90]] : [[970,250],[970,90],[728,90]]) :[[300,250]]),
          bids: [

          
                      
            {
              bidder: 'indexExchange',
              params: {
                id: "6",
                siteID: 184745
              }
            },
            
          
                      
            {
              bidder: 'appnexus',
              params: {
                 placementId: '9524019'
              }
            },
            
          
                      
            {
              bidder: 'sovrn',
              params: {
                 tagid: (windowWidthForAds > szs.t ? '395537' : '395539')
              }
            },
            
          
          
          
                    
                      
            {
              bidder: 'openx',
              params: {
                delDomain: 'famousbirthdays-d.openx.net',
                unit: '538503810'
              }
            },
            
                    
                      
            {
              bidder: 'districtmDMX',
              params: {
                 id:  (windowWidthForAds > szs.t ? '141916' : '141867')
              }
            },
            
                    
                      
            {
              bidder: 'conversant',
              params: {
                 site_id:  '111066',
                 secure: (useSSL ? true : false)
              }
            },
            
          
                      
             {
              bidder: 'rubicon',
              params: {
                accountId:  '11638',
                siteId: '36192',
                zoneId: '632840'
              }
            },
            
          
                      
            {
              bidder: 'audienceNetwork',
              params: {
                 placementId: '828742283953139_832433810250653'
              }
            },
            
          
          
          
          
          ]
        }

      
        ,{
          code: 'div-gpt-ad-1391213528835-0',
          sizes: (windowWidthForAds > szs.t ? (windowWidthForAds < szs.dl ? [[728,90]] : [[970,90],[728,90]]) :[[300,250]]),
          bids: [
          
                      
            {
              bidder: 'indexExchange',
              params: {
                id: "5",
                siteID: (windowWidthForAds > szs.t ? 184744 : 184750)
              }
            },
            
          
                      
            {
              bidder: 'appnexus',
              params: {
                 placementId: '9524018'
              }
            },
            
          
                      
            {
              bidder: 'sovrn',
              params: {
                 tagid: (windowWidthForAds > szs.t ? '395538' : '395540')
              }
            },
            
          
          
          
                    
                      
            {
              bidder: 'openx',
              params: {
                delDomain: 'famousbirthdays-d.openx.net',
                unit: '538503805'
              }
            },
            
                    
                      
            {
              bidder: 'districtmDMX',
              params: {
                 id:  (windowWidthForAds > szs.t ? '141915' : '141866')
              }
            },
            
          
                      
            {
              bidder: 'conversant',
              params: {
                 site_id:  '111066',
                 secure: (useSSL ? true : false)
              }
            },
            
                    
                      
            {
              bidder: 'rubicon',
              params: {
                accountId:  '11638',
                siteId: '36192',
                zoneId: '632838'
              }
            },
            
          
          
                     
          ]
        }
      ];

      
      //add the adUnits
      pbjs.addAdUnits(adUnits);


      //register a callback handler
      pbjs.addCallback('adUnitBidsBack', function (adUnitCode) {
        console.log('ad unit bids back for :',adUnitCode);
      });

      pbjs.requestBids({

        /* The bidsBack function will be called when either timeout is
         reached, or when all bids come back, whichever happens sooner.
         */
        bidsBackHandler: function (bidResponses) {
          initAdserver();

        }

        /* You can specify specific `adUnitCodes` to only request bids
         for certain ad units.
         adUnitCodes: ['code1', 'code2']
         */

        /* You can also make one off bid requests for the given `adUnits`.
         adUnits: [adUnit2, adUnit1]
         */

        /* The bidsBackHandler will be executed either when all bids are
         back, or when the timeout is reached.
         timeout: 1000
         */
      });


      pbjs.bidderSettings = {
        standard: {
          adserverTargeting: [
            {
              key: "hb_bidder",
              val: function (bidResponse) {
                return bidResponse.bidderCode;
              }
            }, {
              key: "hb_adid",
              val: function (bidResponse) {
                return bidResponse.adId;
              }
            }, {
              key: "hb_pb",
                val: function(bidResponse) {
                var cpm = bidResponse.cpm;
                return (Math.floor(cpm * 100) / 100).toFixed(2);
                }
            }
          ]
        },
        
                                      
            appnexus: {
              bidCpmAdjustment: function (bidCpm) {
                return bidCpm * 0.97;
              }

                          
            },                              
            audienceNetwork: {
              bidCpmAdjustment: function (bidCpm) {
                return bidCpm * 1.00;
              }

                          
            },                              
            conversant: {
              bidCpmAdjustment: function (bidCpm) {
                return bidCpm * .99;
              }

                          
            },                                                                      
            districtmDMX: {
              bidCpmAdjustment: function (bidCpm) {
                return bidCpm * 0.88;
              }

                          
            },                                                  
            indexExchange: {
              bidCpmAdjustment: function (bidCpm) {
                return bidCpm * 1.00;
              }

                          
            },                              
            openx: {
              bidCpmAdjustment: function (bidCpm) {
                return bidCpm * 0.97;
              }

              
              ,alwaysUseBid: true, // <-- new field - always send these custom keys for the specified bidder
              adserverTargeting: [
                {
                  key: "custom_bidder",
                  val: function (bidResponse) {
                    return bidResponse.bidderCode;
                  }
                }, {
                  key: "custom_adid",
                  val: function (bidResponse) {
                    return bidResponse.adId;
                  }
                }, {
                  key: "custom_pb",
                  val: function (bidResponse) {
                    return bidResponse.pbMg;
                  }
                }, {
                  key: "custom_size",
                  val: function (bidResponse) {
                    return bidResponse.getSize();

                  }
                }
              ]
                          
            },                              
            rubicon: {
              bidCpmAdjustment: function (bidCpm) {
                return bidCpm * 1.00;
              }

                          
            },                                                  
            sovrn: {
              bidCpmAdjustment: function (bidCpm) {
                return bidCpm * .97;
              }

                          
            }                              
      };
    });

  </script>
<script type='text/javascript'>
  !function(a9,a,p,s,t,A,g){if(a[a9])return;function q(c,r){a[a9]._Q.push([c,r])}a[a9]={init:function(){q("i",arguments)},fetchBids:function(){q("f",arguments)},setDisplayBids:function(){},targetingKeys:function(){return[]},_Q:[]};A=p.createElement(s);A.async=!0;A.src=t;g=p.getElementsByTagName(s)[0];g.parentNode.insertBefore(A,g)}("apstag",window,document,"script","//c.amazon-adsystem.com/aax2/apstag.js");

  // initialize apstag and have apstag set bids on the googletag slots when they are returned to the page
  apstag.init({
    pubID: '3428',
    adServer: 'googletag'
  });

  var amzSlots = [{
      slotID: 'div-gpt-ad-1391210931444-0',
      slotName: '/20602751/famousbirth-top-leaderboard',
      sizes: (windowWidthForAds > szs.t ? [[970,90],[728,90]]:[[320,50]])
    }

        ,{
      slotID: 'div-gpt-ad-1391216460869-2',
      slotName: '/20602751/famousbirth-top-middle-leaderboard',
      sizes: (windowWidthForAds > szs.t ? (windowWidthForAds < szs.dl ? [[728,90]] : [[970,250],[970,90],[728,90]]) :[[300,250]])
    }
    
        ,{
      slotID: 'div-gpt-ad-1423776989563-0',
      slotName: '/20602751/famousbirth-center-middle-leaderboard', 
      sizes: (windowWidthForAds > szs.t ? (windowWidthForAds < szs.dl ? [[728,90]] : [[970,250],[970,90],[728,90]]) :[[300,250]])
    },
    
        ,{
      slotID: 'div-gpt-ad-1391216734145-1',
      slotName: '/20602751/famousbirth-bottom-middle-leaderboard',
      sizes: (windowWidthForAds > szs.t ? (windowWidthForAds < szs.dl ? [[728,90]] : [[970,250],[970,90],[728,90]]) :[[300,250]])
    }
    
    ,{
      slotID: 'div-gpt-ad-1391213528835-0',
      slotName: '/20602751/famousbirth-bottom-leaderboard',
      sizes: (windowWidthForAds > szs.t ? (windowWidthForAds < szs.dl ? [[728,90]] : [[970,90],[728,90]]) :[[300,250]])
    }
    ];


    

</script>
<script>
    /*
      amznads.asyncParams = {
        'id': '3428',
        'callbackFn': function() {
          try {
            amznads.setTargetingForGPTAsync('amznslots');
          } catch (e) {  }
        },
        'timeout': 1000
      };
      

      (function() {
        var a, s = document.getElementsByTagName("script")[0];
        a = document.createElement("script");
        a.type = "text/javascript";
        a.async = true;
        a.src =  (useSSL ? 'https:' : 'http:') + "//c.amazon-adsystem.com/aax2/amzn_ads.js";
        s.parentNode.insertBefore(a, s);
      })();
*/
        googletag.cmd.push(function() {
          //leaderboard
          googletag.defineSlot('/20602751/famousbirth-top-leaderboard', [(windowWidthForAds > szs.t ? ([970,90],[728,90]):[320,50])], 'div-gpt-ad-1391210931444-0').addService(googletag.pubads());

 
          if(windowWidthForAds < szs.dl){

                 
            googletag.defineSlot('/20602751/famousbirth-top-middle-leaderboard', [(windowWidthForAds > szs.t ?[728,90]:[300,250])], 'div-gpt-ad-1391216460869-2').addService(googletag.pubads());

            
            googletag.defineSlot('/20602751/famousbirth-center-middle-leaderboard', [(windowWidthForAds > szs.t ?[728,90]:[300,250])], 'div-gpt-ad-1423776989563-0').addService(googletag.pubads());

            
            googletag.defineSlot('/20602751/famousbirth-bottom-middle-leaderboard', [(windowWidthForAds > szs.t ?[728,90]:[300,250])], 'div-gpt-ad-1391216734145-1').addService(googletag.pubads());

      
            googletag.defineSlot('/20602751/famousbirth-bottom-leaderboard', [(windowWidthForAds > szs.t ?[728,90]:[300,250])], 'div-gpt-ad-1391213528835-0').addService(googletag.pubads());


    
          } else {


                
            googletag.defineSlot('/20602751/famousbirth-top-middle-leaderboard', [[970,250],[970,90],[728,90]], 'div-gpt-ad-1391216460869-2').addService(googletag.pubads());

            
            googletag.defineSlot('/20602751/famousbirth-center-middle-leaderboard', [[970,250],[970,90],[728,90]], 'div-gpt-ad-1423776989563-0').addService(googletag.pubads());

            
            googletag.defineSlot('/20602751/famousbirth-bottom-middle-leaderboard', [[970,250],[970,90],[728,90]], 'div-gpt-ad-1391216734145-1').addService(googletag.pubads());

      
            googletag.defineSlot('/20602751/famousbirth-bottom-leaderboard', [[970,90],[728,90]], 'div-gpt-ad-1391213528835-0').addService(googletag.pubads());


                
          }

           pbjs.que.push(function () {
            pbjs.setTargetingForGPTAsync();
/*            try { 
              amznads.setTargetingForGPTAsync('amznslots'); 
            } catch(e) { 
              console.log('a2',e);
            }
*/            
          });
          
          googletag.pubads().enableSingleRequest();
          googletag.pubads().disableInitialLoad();
          googletag.enableServices();
        });

          apstag.fetchBids({
            slots: amzSlots
          }, function(bids) {
            // set apstag bids, then trigger the first request to DFP
            googletag.cmd.push(function() {
              apstag.setDisplayBids();
              googletag.pubads().refresh();    
            });
          });
      </script>
</head>
<body>
<nav class="nav nav-fixed-top" role="navigation">
<div class="container">
<div class="row no-gutter">
<div class="col-xs-2 col-sm-3 col-md-2">
<a class="brand" href="/" title="SinhNhatNoiTieng.com">Sinh Nhật Nổi Tiếng</a>
</div>
<div class="col-xs-10 col-sm-4">
<form id="fb_search" class="search" role="form" name="fb_search" action="/search" method="post">
<input autocomplete="off" type="search" name="q" placeholder=" Nhập Người NT hoặc Ngày Tháng " class="form-control search search-bar" aria-label="Enter Celebrity or Date">
<button type="submit" class="btn btn-search" aria-label="Search" title="Tìm kiếm"><i class="icn icn-search"></i></button>
</form>
</div>
<div class="col-sm-5 col-md-6">
<ul class="quick-links">
<li><a href="/most-popular-people.html" title="phổ biến"><i class="icn icn-star"></i>phổ biến</a></li>
<li><a href="/trending/" title="xu hướng"><i class="icn icn-trending"></i>xu hướng</a></li>
<li><a href="/new/" title="gần đây"><i class="icn icn-recent"></i>gần đây</a></li>
<li><a id="random-person" href="#" title="ngẫu nhiên" class="random-person"><i class="icn icn-random"></i>ngẫu nhiên</a></li>
</ul>
</div>
</div>
</div>

</div>
</nav>
<div class="page-wrapper">
<div class="list-page">
<div class="heading-container container">

<div class="row">
<div class="col-xs-12">
<div id="div-gpt-ad-1391210931444-0" class="adspot adspot1">
<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1391210931444-0'); });
	</script>
</div> </div>
</div>
</div>
<div class="container people-list">
<div class="row list-title-sub">
<div class="col-xs-12">
<h3 class="page-title">Phổ Biến Nhất</h3>
</div>
</div>
<div class="row">
<?php
while($row=mysqli_fetch_array($query)) {
?>
<a href="<?php echo $row['link'] ?>" class="face person-item" style="background: url(<?php echo $row['img'] ?>) no-repeat center center; background-size:cover;">
<i class="icn icn-star icn-rank"><span class="rank"><?php echo $row['rank'] ?></span></i>
<div class="info">
<div class="name">
<?php echo $row['name'] ?><?php echo $row['age'] ?>
</div>
<div class="title hidden-xs"><?php echo $row['career'] ?></div>
</div>
</a>
<?php
}
?>
</div>
<div class="row">
<div class="text-center">
<div id="div-gpt-ad-1391216460869-2" class="adspot adspot2">
<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1391216460869-2'); });
	</script>
</div> </div>
</div>
<div class="row">
<?php
while($row=mysqli_fetch_array($query0)) {
?>
<a href="<?php echo $row['link'] ?>" class="face person-item" style="background: url(<?php echo $row['img'] ?>) no-repeat center center; background-size:cover;">
<i class="icn icn-star icn-rank"><span class="rank"><?php echo $row['rank'] ?></span></i>
<div class="info">
<div class="name">
<?php echo $row['name'] ?><?php echo $row['age'] ?>
</div>
<div class="title hidden-xs"><?php echo $row['career'] ?></div>
</div>
</a>
<?php
}
?>
</div>
<div class="row">
<div class="text-center">
<div id="div-gpt-ad-1423776989563-0" class="adspot adspot2">
<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423776989563-0'); });
	</script>
</div> </div>
</div>
<div class="row">
<?php
while($row=mysqli_fetch_array($query1)) {
?>
<a href="<?php echo $row['link'] ?>" class="face person-item" style="background: url(<?php echo $row['img'] ?>) no-repeat center center; background-size:cover;">
<i class="icn icn-star icn-rank"><span class="rank"><?php echo $row['rank'] ?></span></i>
<div class="info">
<div class="name">
<?php echo $row['name'] ?><?php echo $row['age'] ?>
</div>
<div class="title hidden-xs"><?php echo $row['career'] ?></div>
</div>
</a>
<?php
}
?>	
</div>
<div class="row">
<div class="text-center">
<div id="div-gpt-ad-1391216734145-1" class="adspot adspot2">
<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1391216734145-1'); });
	</script>
</div> </div>
</div>
<div class="row">
<?php
while($row=mysqli_fetch_array($query2)) {
?>
<a href="<?php echo $row['link'] ?>" class="face person-item" style="background: url(<?php echo $row['img'] ?>) no-repeat center center; background-size:cover;">
<i class="icn icn-star icn-rank"><span class="rank"><?php echo $row['rank'] ?></span></i>
<div class="info">
<div class="name">
<?php echo $row['name'] ?><?php echo $row['age'] ?>
</div>
<div class="title hidden-xs"><?php echo $row['career'] ?></div>
</div>
</a>
<?php
}
?>	
</div>
<div class="cta-container">
<div class="row">
<div class="col-xs-12">
<div class="col-sm-6 cta-btn-container">
<a href="/trending" class="btn btn-primary btn-block btn-lg">Xu Hướng<span class="pull-right"><i class="icn icn-angle-right"></i></span></a>
</div>
<div class="col-sm-6 cta-btn-container">
<a href="/profession/  " class="btn btn-primary btn-block btn-lg">Nghề Nghiệp<span class="pull-right"><i class="icn icn-angle-right"></i></span></a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div id="div-gpt-ad-1391213528835-0" class="adspot adspot7">
<script>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1391213528835-0'); });
	</script>
</div> </div>
</div>
</div>
</div>
</div>

<div class="footer-wrapper">
<div class="container">
<footer>
<div class="row">
<div class="col-sm-6">
<ul class="social">
<li>
<a class="icn icn-twitter" href="https://twitter.com/famousbirthdays" targe="_blank" title="Twitter Sinh Nhật Nổi Tiếng"></a>
</li>
<li>
 <a class="icn icn-facebook" href="https://www.facebook.com/FamousBirthdays" targe="_blank" title="Facebook  Sinh Nhật Nổi Tiếng"></a>
</li>
<li>
<a class="icn icn-instagram" href="https://instagram.com/famousbirthdays" targe="_blank" title="Instagram  Sinh Nhật Nổi Tiếng"></a>
</li>
<li>
<a class="icn icn-ios" href="https://itunes.apple.com/us/app/famous-birthdays-celebrity/id646707938" targe="_blank" title="Cài đặt ƯD iOS Sinh Nhật Nổi Tiếng"></a>
</li>
<li>
<a class="icn icn-android" href="https://play.google.com/store/apps/details?id=com.famousbirthdays" targe="_blank" title="Cài đặt ƯD Android Sinh Nhật Nổi Tiếng"></a>
</li>
</ul>
<ul class="quick-links">
<li><a href="/about/">Thông Tin</a></li>
<li><a href="/contact/">Liên Hệ</a></li>
<li><a href="https://www.amazon.com/s/ref=w_bl_sl_s_ap_web_7141123011?ie=UTF8&node=7141123011&field-brandtextbin=Famous+Birthdays">Áo-Thun</a></li>
<li><a href="/team/">Nhóm</a></li>
<li><a href="/terms/">Điều Khoản</a></li>
</ul>
</div>
<div class="col-sm-6">
<div class="row">
<div class="col-sm-12">
<a href="/" class="brand pull-right" title="FamousBirthdays.com"></a>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<ul class="copyright">
<li>© SinhNhatNoiTieng.com 2017</li>
</ul>
</div>
</div>
</div>
</div>
</footer>
</div>
</div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-57102239-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
    </script>

<script>
    var _comscore = _comscore || [];
    _comscore.push({ c1: "2", c2: "25527630" });
    (function() {
      var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
      s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
      el.parentNode.insertBefore(s, el);
    })();
  </script>

<div id="autocomplete-suggestions" class="autocomplete-suggestions" style="position: fixed; display: none; max-height: 300px; z-index: 9999;"></div>
<form name="random" id="random-form" method="post" action="/random"></form>
<script type="text/javascript" src="/static/js/main.js"></script>
<script>
    if ('serviceWorker' in navigator && 'PushManager' in window) {
        navigator.serviceWorker.register('/fb-sw.js')
        .then(function(swReg) {
        })
        .catch(function(error) {
          console.error('Service Worker Error', error);
        });
    } 
  </script>
</body>
</html>
