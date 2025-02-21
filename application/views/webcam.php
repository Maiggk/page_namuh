<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WebCodeCamJS</title>
          <link href="<?php echo base_url(); ?>assets/webcam/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/webcam/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="page-header text-center">
            <h1 style="color: cadetblue;">WebCodeCamJS 2.1.0<br>&amp;<br>
                                          WebCodeCamJQuery 2.1.0<br>
                <small>Download from:
                    <a href="https://github.com/andrastoth/WebCodeCamJS" target="_blank"> GitHub </a> Or 
                    <a href="http://www.jsclasses.org/package/446-JavaScript-Qr-and-barcode-decoder.html" target="_blank"> JSclasses </a>
                </small>
            </h1>
            <p style="font-style: italic;">
                <span class="glyphicon glyphicon-info-sign"></span>
                News in this version 2.1.0 extend BuildSelectMenu function
                <span class="glyphicon glyphicon-info-sign"></span><br>
                <span class="glyphicon glyphicon-info-sign"></span>
                News in this version 2.0.5 Add parameter tryVertical to options
                <span class="glyphicon glyphicon-info-sign"></span><br>
                <span class="glyphicon glyphicon-info-sign"></span>
                News in this version 2.0.1 Add successTimeout, codeRepetition parameters to options
                <span class="glyphicon glyphicon-info-sign"></span><br>
                <span class="glyphicon glyphicon-info-sign"></span>
                News in this version 2.0.0: Add UPC-A, UPC-E support.
                <span class="glyphicon glyphicon-info-sign"></span><br>
                <span class="glyphicon glyphicon-info-sign"></span>
                News in this version 1.9.0: Decode from url.
                <span class="glyphicon glyphicon-info-sign"></span><br>
                <span class="glyphicon glyphicon-info-sign"></span>
                News in this version 1.8.0: Decode local image.
                <span class="glyphicon glyphicon-info-sign"></span>
            </p>
            <p>
                New versions of popular WebCodeCam jQuery plugin
                Available jquery or javascript version.<br>
                <ul style="display:inline-block;"><span style="font-weight:bold;">Advantages compared to the previous version:</span>
                    <li>Built in camera selector menu creation</li>
                    <li>Faster</li>
                    <li>Lower CPU and Memory usage</li>
                    <li>More configurable</li>
                </ul>
            </p>
        </div>
        <div class="container text-center">
            <h2>Compatibility Table</h2>
            <p>Current state of browser compatibility 2015-10-01</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Functions</th>
                        <th><a>IE11</a><img src="css/Internet_Explorer_9.png"></th>
                        <th><a>MS Edge</a><img src="css/949320192f43b9d8.png"></th>
                        <th><a>Chrome 44</a><img src="css/google-chrome.png"></th>
                        <th><a>Chrome Canary</a><img src="css/Chrome_Canary_Icon.png"></th>
                        <th><a>Firefox 39.0.0</a><img src="css/mozilla_firefox.png"></th>
                        <th><a>Firefox Nightly</a><img src="css/firefox-dev.png"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong><a>Media stream capture &amp; decode</a></strong></td>
                        <td class="danger">No</td>
                        <td class="success">Yes</td>
                        <td class="success">Yes</td>
                        <td class="success">Yes</td>
                        <td class="success">Yes</td>
                        <td class="success">Yes</td>
                    </tr>
                    <tr>
                        <td><strong><a>Build select menu</a></strong></td>
                        <td class="danger">No</td>
                        <td class="warning">Partial</td>
                        <td class="success">Yes</td>
                        <td class="success">Yes</td>
                        <td class="warning">Partial but selectable<br> on built in pop up window</td>
                        <td class="warning">Partial but selectable<br> on built in pop up window</td>
                    </tr>
                    <tr>
                        <td><strong><a>Decode image(url/local)</a></strong></td>
                        <td class="success">Yes</td>
                        <td class="success">Yes</td>
                        <td class="success">Yes</td>
                        <td class="success">Yes</td>
                        <td class="success">Yes</td>
                        <td class="success">Yes</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container" id="QR-Code">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="navbar-form navbar-left">
                        <h4>WebCodeCamJS.js Demonstration</h4>
                    </div>
                    <div class="navbar-form navbar-right">
                        <select class="form-control" id="camera-select"></select>
                        <div class="form-group">
                            <input id="image-url" type="text" class="form-control" placeholder="Image url">
                            <button title="Decode Image" class="btn btn-default btn-sm" id="decode-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-upload"></span></button>
                            <button title="Image shoot" class="btn btn-info btn-sm disabled" id="grab-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-picture"></span></button>
                            <button title="Play" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-play"></span></button>
                            <button title="Pause" class="btn btn-warning btn-sm" id="pause" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-pause"></span></button>
                            <button title="Stop streams" class="btn btn-danger btn-sm" id="stop" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-stop"></span></button>
                         </div>
                    </div>
                </div>
                <div class="panel-body text-center">
                    <div class="col-md-6">
                        <div class="well" style="position: relative;display: inline-block;">
                            <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                            <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                        </div>
                        <div class="well" style="width: 100%;">
                            <label id="zoom-value" width="100">Zoom: 2</label>
                            <input id="zoom" onchange="Page.changeZoom();" type="range" min="10" max="30" value="20">
                            <label id="brightness-value" width="100">Brightness: 0</label>
                            <input id="brightness" onchange="Page.changeBrightness();" type="range" min="0" max="128" value="0">
                            <label id="contrast-value" width="100">Contrast: 0</label>
                            <input id="contrast" onchange="Page.changeContrast();" type="range" min="-128" max="128" value="0">
                            <label id="threshold-value" width="100">Threshold: 0</label>
                            <input id="threshold" onchange="Page.changeThreshold();" type="range" min="0" max="512" value="0">
                            <label id="sharpness-value" width="100">Sharpness: off</label>
                            <input id="sharpness" onchange="Page.changeSharpness();" type="checkbox">
                            <label id="grayscale-value" width="100">grayscale: off</label>
                            <input id="grayscale" onchange="Page.changeGrayscale();" type="checkbox">
                            <br>
                            <label id="flipVertical-value" width="100">Flip Vertical: off</label>
                            <input id="flipVertical" onchange="Page.changeVertical();" type="checkbox">
                            <label id="flipHorizontal-value" width="100">Flip Horizontal: off</label>
                            <input id="flipHorizontal" onchange="Page.changeHorizontal();" type="checkbox">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumbnail" id="result">
                            <div class="well">
                                <img width="320" height="240" id="scanned-img" src="">
                            </div>
                            <div class="caption">
                                <h3>Scanned result</h3>
                                <p id="scanned-QR"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <h3>Required HTML &amp; Javascript example</h3>
<!-- HTML generated using hilite.me -->
<div style="background: #272822; overflow:auto;width:auto;padding:0;height:400px;">
<pre style="margin: 0; line-height: 125%">
<span style="color: #75715e">&lt;!DOCTYPE html&gt;</span>
<span style="color: #f92672">&lt;html&gt;</span>
    <span style="color: #f92672">&lt;head&gt;</span>
        <span style="color: #f92672">&lt;meta</span> <span style="color: #a6e22e">charset=</span><span style="color: #e6db74">&quot;UTF-8&quot;</span><span style="color: #f92672">&gt;</span>
        <span style="color: #f92672">&lt;title&gt;</span>Demo<span style="color: #f92672">&lt;/title&gt;</span>
    <span style="color: #f92672">&lt;/head&gt;</span>
    <span style="color: #f92672">&lt;body&gt;</span>
        <span style="color: #f92672">&lt;h3&gt;</span>Simple initialization with default settings<span style="color: #f92672">&lt;/h3&gt;</span>
        <span style="color: #f92672">&lt;hr&gt;</span>
        <span style="color: #f92672">&lt;canvas&gt;&lt;/canvas&gt;</span>
        <span style="color: #f92672">&lt;hr&gt;</span>
        <span style="color: #f92672">&lt;ul&gt;&lt;/ul&gt;</span>
        <span style="color: #f92672">&lt;script </span><span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;text/javascript&quot;</span> <span style="color: #a6e22e">src=</span><span style="color: #e6db74">&quot;js/qrcodelib.js&quot;</span><span style="color: #f92672">&gt;&lt;/script&gt;</span>
        <span style="color: #f92672">&lt;script </span><span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;text/javascript&quot;</span> <span style="color: #a6e22e">src=</span><span style="color: #e6db74">&quot;js/webcodecamjs.js&quot;</span><span style="color: #f92672">&gt;&lt;/script&gt;</span>
        <span style="color: #75715e">&lt;!-- </span>
<span style="color: #75715e">            Using jquery version:</span>
<span style="color: #75715e">            &lt;script type=&quot;text/javascript&quot; src=&quot;js/jquery.js&quot;&gt;&lt;/script&gt;</span>
<span style="color: #75715e">            &lt;script type=&quot;text/javascript&quot; src=&quot;js/qrcodelib.js&quot;&gt;&lt;/script&gt;</span>
<span style="color: #75715e">            &lt;script type=&quot;text/javascript&quot; src=&quot;js/webcodecamjquery.js&quot;&gt;&lt;/script&gt;</span>
<span style="color: #75715e">        --&gt;</span>
        <span style="color: #f92672">&lt;script </span><span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;text/javascript&quot;</span><span style="color: #f92672">&gt;</span>
            <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">txt</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;innerText&quot;</span> <span style="color: #66d9ef">in</span> <span style="color: #a6e22e">HTMLElement</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">prototype</span> <span style="color: #f92672">?</span> <span style="color: #e6db74">&quot;innerText&quot;</span> <span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;textContent&quot;</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">arg</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">{</span>
                <span style="color: #a6e22e">resultFunction</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">result</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
                    <span style="color: #75715e">/*</span>
<span style="color: #75715e">                        result.format: code format,</span>
<span style="color: #75715e">                        result.code: decoded string,</span>
<span style="color: #75715e">                        result.imgData: decoded image data</span>
<span style="color: #75715e">                    */</span>
                    <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">aChild</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">document.</span><span style="color: #a6e22e">createElement</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;li&#39;</span><span style="color: #f8f8f2">);</span>
                    <span style="color: #a6e22e">aChild</span><span style="color: #f8f8f2">[</span><span style="color: #a6e22e">txt</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">result</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">format</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&#39;: &#39;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">result</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">code</span><span style="color: #f8f8f2">;</span>
                    <span style="color: #f8f8f2">document.</span><span style="color: #a6e22e">querySelector</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">appendChild</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">aChild</span><span style="color: #f8f8f2">);</span>
                <span style="color: #f8f8f2">}</span>
            <span style="color: #f8f8f2">};</span>
    <span style="color: #75715e">/* -------------------------------------- Available parameters --------------------------------------*/</span>
    <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">options</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">DecodeQRCodeRate</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #f8f8f2">,</span>                    <span style="color: #75715e">// null to disable OR int &gt; 0 !</span>
        <span style="color: #a6e22e">DecodeBarCodeRate</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #f8f8f2">,</span>                   <span style="color: #75715e">// null to disable OR int &gt; 0 !</span>
        <span style="color: #a6e22e">successTimeout</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">500</span><span style="color: #f8f8f2">,</span>                    <span style="color: #75715e">// delay time when decoding is succeed</span>
        <span style="color: #a6e22e">codeRepetition</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">true</span><span style="color: #f8f8f2">,</span>                   <span style="color: #75715e">// accept code repetition true or false</span>
        <span style="color: #a6e22e">tryVertical</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">true</span><span style="color: #f8f8f2">,</span>                      <span style="color: #75715e">// try decoding vertically positioned barcode true or false</span>
        <span style="color: #a6e22e">frameRate</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">15</span><span style="color: #f8f8f2">,</span>                          <span style="color: #75715e">// 1 - 25</span>
        <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">320</span><span style="color: #f8f8f2">,</span>                             <span style="color: #75715e">// canvas width</span>
        <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">240</span><span style="color: #f8f8f2">,</span>                            <span style="color: #75715e">// canvas height</span>
        <span style="color: #a6e22e">constraints</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">{</span>                          <span style="color: #75715e">// default constraints</span>
            <span style="color: #a6e22e">video</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">{</span>
                <span style="color: #a6e22e">mandatory</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">{</span>
                    <span style="color: #a6e22e">maxWidth</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1280</span><span style="color: #f8f8f2">,</span>
                    <span style="color: #a6e22e">maxHeight</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">720</span>
                <span style="color: #f8f8f2">},</span>
                <span style="color: #a6e22e">optional</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">[{</span>
                    <span style="color: #a6e22e">sourceId</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">true</span>
                <span style="color: #f8f8f2">}]</span>
            <span style="color: #f8f8f2">},</span>
            <span style="color: #a6e22e">audio</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">false</span>
        <span style="color: #f8f8f2">},</span>
        <span style="color: #a6e22e">flipVertical</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span>                    <span style="color: #75715e">// boolean</span>
        <span style="color: #a6e22e">flipHorizontal</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span>                  <span style="color: #75715e">// boolean</span>
        <span style="color: #a6e22e">zoom</span><span style="color: #f92672">:</span> <span style="color: #f92672">-</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">,</span>                               <span style="color: #75715e">// if zoom = -1, auto zoom for optimal resolution else int</span>
        <span style="color: #a6e22e">beep</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;audio/beep.mp3&#39;</span><span style="color: #f8f8f2">,</span>                 <span style="color: #75715e">// string, audio file location</span>
        <span style="color: #a6e22e">decoderWorker</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;js/DecoderWorker.js&#39;</span><span style="color: #f8f8f2">,</span>   <span style="color: #75715e">// string, DecoderWorker file location</span>
        <span style="color: #a6e22e">brightness</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span>                          <span style="color: #75715e">// int</span>
        <span style="color: #a6e22e">autoBrightnessValue</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span>             <span style="color: #75715e">// functional when value autoBrightnessValue is int</span>
        <span style="color: #a6e22e">grayScale</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span>                       <span style="color: #75715e">// boolean</span>
        <span style="color: #a6e22e">contrast</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span>                            <span style="color: #75715e">// int</span>
        <span style="color: #a6e22e">threshold</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span>                           <span style="color: #75715e">// int </span>
        <span style="color: #a6e22e">sharpness</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">[],</span>      <span style="color: #75715e">// to On declare matrix, example for sharpness -&gt;  [0, -1, 0, -1, 5, -1, 0, -1, 0]</span>
        <span style="color: #a6e22e">resultFunction</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">result</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
            <span style="color: #75715e">/*</span>
<span style="color: #75715e">                result.format: code format,</span>
<span style="color: #75715e">                result.code: decoded string,</span>
<span style="color: #75715e">                result.imgData: decoded image data</span>
<span style="color: #75715e">            */</span>
            <span style="color: #a6e22e">alert</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">result</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">code</span><span style="color: #f8f8f2">);</span>
        <span style="color: #f8f8f2">},</span>
        <span style="color: #a6e22e">cameraSuccess</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">stream</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>           <span style="color: #75715e">//callback funtion to camera success</span>
            <span style="color: #a6e22e">console</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">log</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;cameraSuccess&#39;</span><span style="color: #f8f8f2">);</span>
        <span style="color: #f8f8f2">},</span>
        <span style="color: #a6e22e">canPlayFunction</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>               <span style="color: #75715e">//callback funtion to can play</span>
            <span style="color: #a6e22e">console</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">log</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;canPlayFunction&#39;</span><span style="color: #f8f8f2">);</span>
        <span style="color: #f8f8f2">},</span>
        <span style="color: #a6e22e">getDevicesError</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">error</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>          <span style="color: #75715e">//callback funtion to get Devices error</span>
            <span style="color: #a6e22e">console</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">log</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">error</span><span style="color: #f8f8f2">);</span>
        <span style="color: #f8f8f2">},</span>
        <span style="color: #a6e22e">getUserMediaError</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">error</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>        <span style="color: #75715e">//callback funtion to get usermedia error</span>
            <span style="color: #a6e22e">console</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">log</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">error</span><span style="color: #f8f8f2">);</span>
        <span style="color: #f8f8f2">},</span>
        <span style="color: #a6e22e">cameraError</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">error</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>              <span style="color: #75715e">//callback funtion to camera error  </span>
            <span style="color: #a6e22e">console</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">log</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">error</span><span style="color: #f8f8f2">);</span>
        <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">};</span>

    <span style="color: #75715e">/*---------------------------- Example initializations Javascript version ----------------------------*/</span>
    <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">WebCodeCamJS</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;canvas&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">init</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">arg</span><span style="color: #f8f8f2">);</span>
    <span style="color: #75715e">/* OR */</span>
    <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">canvas</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">document.</span><span style="color: #a6e22e">querySelector</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#webcodecam-canvas&#39;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">WebCodeCamJS</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">canvas</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">init</span><span style="color: #f8f8f2">();</span>
    <span style="color: #75715e">/* OR */</span>
    <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">WebCodeCamJS</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#webcodecam-canvas&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">init</span><span style="color: #f8f8f2">();</span>

    <span style="color: #75715e">/*------------------------ Example initializations jquery &amp; Javascript version ------------------------*/</span>
    <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">decoder</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">WebCodeCamJS</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#webcodecam-canvas&#39;</span><span style="color: #f8f8f2">);</span>

    <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">decoder</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#webcodecam-canvas&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">WebCodeCamJQuery</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">args</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">().</span><span style="color: #a6e22e">plugin_WebCodeCamJQuery</span><span style="color: #f8f8f2">;</span>

    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">buildSelectMenu</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#camera-select&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">sel</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">//sel : default camera optional</span>
    <span style="color: #75715e">/* Chrome &amp; ': build select menu</span>
<span style="color: #75715e">    *  Firefox: the default camera initializes, return decoder object </span>
<span style="color: #75715e">    */</span>
    <span style="color: #75715e">//simple initialization</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">init</span><span style="color: #f8f8f2">();</span>
    <span style="color: #75715e">/* Select environment camera if available */</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">buildSelectMenu</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#camera-select&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&#39;environment|back&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">init</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">args</span><span style="color: #f8f8f2">);</span>
    <span style="color: #75715e">/* Select user camera if available */</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">buildSelectMenu</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#camera-select&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&#39;user|front&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">init</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">args</span><span style="color: #f8f8f2">);</span>
    <span style="color: #75715e">/* Select camera by name */</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">buildSelectMenu</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#camera-select&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&#39;facecam&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">init</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">args</span><span style="color: #f8f8f2">);</span>
    <span style="color: #75715e">/* Select first camera */</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">buildSelectMenu</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#camera-select&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">init</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">args</span><span style="color: #f8f8f2">);</span>
    <span style="color: #75715e">/* Select environment camera if available, without visible select menu*/</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">buildSelectMenu</span><span style="color: #f8f8f2">(document.</span><span style="color: #a6e22e">createElement</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;select&#39;</span><span style="color: #f8f8f2">),</span> <span style="color: #e6db74">&#39;environment|back&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">init</span><span style="color: #f8f8f2">().</span><span style="color: #a6e22e">play</span><span style="color: #f8f8f2">();</span>   

    <span style="color: #75715e">/* --------------------------------------- Available Functions: ----------------------------------------*/</span>
    <span style="color: #75715e">/* camera stop &amp; delete stream */</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">stop</span><span style="color: #f8f8f2">();</span>
    <span style="color: #75715e">/* camera play, restore process */</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">play</span><span style="color: #f8f8f2">();</span>
    <span style="color: #75715e">/* get current image from camera */</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">getLastImageSrc</span><span style="color: #f8f8f2">();</span>
    <span style="color: #75715e">/* decode local image */</span>
    <span style="color: #75715e">/* if url is defined download image before staring open process */</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">decodeLocalImage</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">url</span><span style="color: #f8f8f2">);</span>
    <span style="color: #75715e">/* get optimal zoom */</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">getOptimalZoom</span><span style="color: #f8f8f2">();</span>
    <span style="color: #75715e">/* Configurable options */</span>
    <span style="color: #a6e22e">decoder</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">options</span><span style="color: #f8f8f2">[</span><span style="color: #e6db74">&#39;parameter&#39;</span><span style="color: #f8f8f2">];</span>
    <span style="color: #75715e">/* Example: </span>
<span style="color: #75715e">    ** decoder.options.brightness = 20;         - set brightness to 20</span>
<span style="color: #75715e">    ** decoder.options.DecodeQRCodeRate = null; - disable qrcode decoder</span>
<span style="color: #75715e">    */</span>
        <span style="color: #f92672">&lt;/script&gt;</span>
    <span style="color: #f92672">&lt;/body&gt;</span>
<span style="color: #f92672">&lt;/html&gt;</span>
</pre>
                </div>
            </div>
        </div>
       <script type="text/javascript" src="<?php echo base_url(); ?>assets/webcam/js/filereader.js"></script>
        <!-- Using jquery version: -->
        <!--
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/qrcodelib.js"></script>
            <script type="text/javascript" src="js/webcodecamjquery.js"></script>
            <script type="text/javascript" src="js/mainjquery.js"></script>
        -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/webcam/js/qrcodelib.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/webcam/js/webcodecamjs.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/webcam/js/main.js"></script>
    </body>
</html>



      