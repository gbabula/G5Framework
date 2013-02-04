                <article class="first" id="download">
                    <p><em>Web boilerplate stack (<a href="#html5" class="scroll-to">HTML5</a>, <a href="#css3" class="scroll-to">CSS3</a>, <a href="#jquery" class="scroll-to">jQuery</a>, and <a href="#php" class="scroll-to">PHP</a>). G5Framework provides some rock-solid code and functionality for you to start with, however it leaves all the remaining development and styling up to the developer.</em></p>
                    
                    <p class="topspc"><span class="t-icon">K</span> <strong>License:</strong> Must leave reference to <a href="humans.txt">humans.txt</a></p>
                    <p><span class="t-icon">D</span> <strong>Download:</strong> <a href="#">ZIP</a>, <a href="#">Source on GitHub</a></p>
                </article><!--end #download-->

                <section class="island" id="faq">
                    <h1><a href="#faq">#</a> FAQ</h1>
                    <dl>
                        <dt>Q: What is the main objective?</dt>
                        <dd>To increase the speed of development while maintaining code quality, structure, consistency, and promoting standards and good principles.</dd>

                        <dt>Q: How is G5Framework different from <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> and/or <a href="http://html5boilerplate.com/">HTML5BP</a></dt>
                        <dd>The main purpose is the same, to provide a solid start point for web projects. However the overall product is different and assumes many different web developent principles. Also unlike Bootstrap, G5Framework leaves the <abbr title="User Interface">UI</abbr> development up to you (the developer).</dd>

                        <dt>Q: What browsers are supported?</dt>
                        <dd>IE7+, Chrome, Firefox, Safari, Opera</dd>

                        <dt>Q: Is it a framework?</dt>
                        <dd>No, G5Framework is a website starter boilerplate.</dd>

                        <dt>Q: Why do you call it &quot;G5Framework&quot;?</dt>
                        <dd>Because it's much different than your usual boilerplate.</dd>

                        <dt>Q: What style guide does the boilerplate use?</dt>
                        <dd>G5Framework uses Google's <a href="http://google-styleguide.googlecode.com/svn/trunk/htmlcssguide.xml">HTML/CSS</a>/<a href="http://google-styleguide.googlecode.com/svn/trunk/javascriptguide.xml">JS</a> style guides.</dd>

                        <dt>Q: Can I use G5Framework for commercial projects?</dt>
                        <dd>Use it for anything you need, however you are required to leave a reference to the <a href="humans.txt">humans.txt</a> file.</dd>

                        <dt>Q: I don't like PHP, whats the deal?</dt>
                        <dd>PHP use is pretty minimal, and it will only take a few minutes to strip out all the PHP from the project, so if you want to use the other stuff you still can with minial effort.</dd>

                        <dt>Q: I don't want to use jQuery and/or I want to handle my JS differently.</dt>
                        <dd>Open up app.js and adjust whatever you need, besides Modernizr which always needs to live in the head, all JS is referenced from app.js (which lives before the closing body tag).</dd>

                        <dt>Q: Who created G5Framework?</dt>
                        <dd>The project is managed by <a href="http://gregbabula.info">Greg Babula</a>, see <a href="humans.txt">humans.txt</a> for the full list of authors.</dd>
                    </dl>
                </section><!--end #faq-->

                <section class="island" id="breakdown">
                    <h1><a href="#breakdown">#</a> Breakdown</h1>
                    <h2 id="html5">HTML</h2>

                        <ul class="list">
                            <li><a href="http://microformats.org/wiki/posh">POSH</a> (Plain Old Semantic HTML)</li>
                            <li><a href="http://microformats.org/">Microformats</a></li>
                            <li>Accessibility</li>
                            <li>SEO</li>
                            <li>Favicons <a href="http://www.jonathantneal.com/blog/understand-the-favicon/">for everyone</a></li>
                        </ul><!--end .list-->

                    <h2 id="css3">CSS</h2>

                        <ul class="list">
                            <li>Reset + HTML5 Baseline + Normalize + Print Base</li>
                            <li><a href="http://css3pie.com/">CSS3 Pie 2</a></li>
                            <li>OOCSS</li>
                            <li><a href="#grid-example" class="scroll-to">OOCSS Grid</a></li>
                            <li><a href="#buttons-example" class="scroll-to">OOCSS Buttons</a></li>
                            <li>Responsive (Under 480px gets <a href="https://github.com/stubbornella/oocss/blob/master/core/grid/grids_iphone.css">1 col layout</a>)</li>
                            <li>Responsive Tables</li>
                            <li><a href="#css-classes" class="scroll-to">Reusable cross-browser classes</a></li>
                            <li>@font-face <a href="http://www.fontsquirrel.com/fonts/modern-pictograms">Icon font</a></li>
                        </ul><!--end .list-->

                    <h2 id="jquery">jQuery/JavaScript</h2>

                        <ul class="list">
                            <li><a href="http://modernizr.com/">Modernizr 2.6.2</a></li>
                            <li><a href="https://github.com/scottjehl/iOS-Orientationchange-Fix">iOS Orientation Fix</a></li>
                            <li><a href="http://jquery.com/">jQuery 1.9.0</a>
                                <ul class="list">
                                    <li><a href="#tabs-example" class="scroll-to">Simple Tabs</a></li>
                                    <li>Simple Modals (<a href="#" rel="modal" data-modal_content="example">Example</a>, <a href="http://gregbabula.com" rel="external">Exit Ramp</a>)</li>
                                    <li><a href="#form-example" class="scroll-to">Form Example</a>
                                        <ul class="list">    
                                            <li><a href="https://github.com/jquery/jquery-metadata">jQuery Metadata</a></li>
                                            <li><a href="https://github.com/filamentgroup/jQuery-Custom-Input">jQuery Custom Input</a> (Radio/Checkbox replacement)</li>
                                            <li><a href="https://github.com/danielstocks/jQuery-Placeholder">jQuery Placeholder Fallback</a></li>
                                            <li><a href="http://docs.jquery.com/Plugins/Validation">jQuery Validation</a></li>
                                        </ul><!--end .list-->
                                    </li>
                                </ul><!--end .list-->

                                <ul class="list">
                                    <li>Strict Mode</li>
                                    <li>Console.log fallback</li>
                                    <li>jQuery from CDN with local fallback</li>
                                    <li>Asset loading via YepNope</li>
                                    <li>Cache main elements</li>
                                    <li>Cache location</li>
                                    <li>Smooth scroll</li>
                                    <li>Print</li>
                                </ul><!--end .list-->
                            </li>
                        </ul><!--end .list-->

                    <h2 id="php">PHP</h2>

                        <ul class="list">
                            <li>GZIP</li>
                            <li>Canonical URL</li>
                            <li>Include</li>
                        </ul><!--end .list-->

                </section><!--end #breakdown-->

                <section class="island" id="grid-example">
                    <h1><a href="#grid-example">#</a> OOCSS Grid</h1>
                        <p>Further explanation can be <a href="https://github.com/stubbornella/oocss/wiki/Grids">found here</a>.</p>

                    <div class="line btmspc">
                        <div class="unit size1of2">
                            <h3>1/2</h3>
                            <p>Lorem ipsum dolor sit amet&hellip;</p>
                        </div>
                        <div class="unit size1of2 lastUnit">
                            <h3>1/2</h3>
                            <p>Lorem ipsum dolor sit amet&hellip;</p>
                        </div>
                    </div><!--end .line-->

                    <div class="line">
                        <div class="unit size1of5">
                            <h3>1/5</h3>
                            <p>Lorem ipsum dolor sit amet&hellip;</p>
                            <p>Lorem ipsum dolor sit amet&hellip;</p>
                            <p>Lorem ipsum dolor sit amet&hellip;</p>
                        </div>
                        <div class="unit size3of5">
                            <div class="line">
                                <div class="unit size1of2">
                                    <h3>1/2</h3>
                                    <p>Lorem ipsum dolor sit amet&hellip;</p>
                                </div>
                                <div class="unit size1of2 lastUnit">
                                    <h3>1/2</h3>
                                    <p>Lorem ipsum dolor sit amet&hellip;</p>
                                </div>
                            </div><!--end .line-->
                            <div class="line">
                                <div class="unit size1of3">
                                    <h3>1/3</h3>
                                    <p>Lorem ipsum dolor sit amet&hellip;</p>
                                    <p>Lorem ipsum dolor sit amet&hellip;</p>
                                </div>
                                <div class="unit size2of3 lastUnit">
                                    <div class="line">
                                        <div class="unit size1of2">
                                            <h3>1/2</h3>
                                            <p>Lorem ipsum dolor sit amet&hellip;</p>
                                        </div>
                                        <div class="unit size1of2 lastUnit">
                                            <h3>1/2</h3>
                                            <p>Lorem ipsum dolor sit amet&hellip;</p>
                                        </div>
                                    </div><!--end .line-->
                                    <div class="line">
                                        <div class="unit size1of1">
                                            <h3>1</h3>
                                            <p>Lorem ipsum dolor sit amet&hellip;</p>
                                        </div>
                                    </div><!--end .line-->
                                </div>
                            </div>
                        </div>
                        <div class="unit size1of5 lastUnit">
                            <h3>1/5</h3>
                            <p>Lorem ipsum dolor sit amet&hellip;</p>
                            <p>Lorem ipsum dolor sit amet&hellip;</p>
                            <p>Lorem ipsum dolor sit amet&hellip;</p>
                        </div>
                    </div>
                </section><!--end #grid-example-->

                <section class="island" id="buttons-example">
                    <h1><a href="#buttons-example">#</a> Buttons</h1>
                    
                    <div class="line btmspc">
                        <a href="#" class="button primary brdr brdr-primary">Standard Button</a>
                        <a href="#" class="button primary brdr brdr-primary">Standard Button</a>
                        <a href="#" class="button primary brdr brdr-primary">Standard Button</a>
                    </div><!--end .line-->

                    <div class="line btmspc">
                        <a href="#" class="button primary brdr brdr-secondary">Standard Button</a>
                        <a href="#" class="button primary brdr brdr-secondary">Standard Button</a>
                        <a href="#" class="button primary brdr brdr-secondary">Standard Button</a>
                    </div><!--end .line-->

                    <div class="line btmspc">
                        <a href="#" class="button secondary brdr brdr-primary"><span class="t-icon">l</span>Secondary Button</a>
                        <a href="#" class="button secondary brdr brdr-primary"><span class="t-icon">L</span>Secondary Button</a>
                        <a href="#" class="button secondary brdr brdr-primary"><span class="t-icon">f</span>Secondary Button</a>
                    </div><!--end .line-->

                    <div class="line btmspc">
                        <a href="#" class="button secondary brdr brdr-secondary"><span class="t-icon">m</span>Secondary Button</a>
                        <a href="#" class="button secondary brdr brdr-secondary"><span class="t-icon">w</span>Secondary Button</a>
                        <a href="#" class="button secondary brdr brdr-secondary">Secondary Button<span class="t-icon right">x</span></a>
                    </div><!--end .line-->

                    <div class="line btmspc">
                        <a href="#" class="button tertiary brdr brdr-primary"><span class="t-icon">=</span>Tertiary Button</a>
                        <a href="#" class="button tertiary brdr brdr-primary"><span class="t-icon">!</span>Tertiary Button</a>
                        <a href="#" class="button tertiary brdr brdr-primary"><span class="t-icon">^</span>Tertiary Button</a>
                    </div><!--end .line-->

                    <div class="line">
                        <a href="#" class="button tertiary brdr brdr-secondary"><span class="t-icon">i</span>Tertiary Button</a>
                        <a href="#" class="button tertiary brdr brdr-secondary"><span class="t-icon">j</span>Tertiary Button</a>
                        <a href="#" class="button tertiary brdr brdr-secondary">Tertiary Button<span class="t-icon right">}</span></a>
                    </div><!--end .line-->
                </section><!--end #buttons-example-->

                <section class="island" id="tabs-example">
                    <h1><a href="#tabs-example">#</a> Simple Tabs</h1>

                    <section class="tabs simple-tabs">
                        <ul class="cf">
                            <li class="active"><a href="#" class="first headlink">Tab One</a></li>
                            <li><a href="#" class="headlink">Tab Two</a></li>
                            <li><a href="#" class="headlink">Tab Three</a></li>
                        </ul>

                        <div class="tabs-content cf">
                            <article class="tab active">
                                <h3>Tab One Content</h3>
                                <p>Lorem ipsum dolor sit amet&hellip;</p>
                            </article><!--end .tab-->
                            <article class="tab">
                                <h3>Tab Two Content</h3>
                                <p>Tab Two Lorem ipsum dolor sit amet&hellip;</p>
                            </article><!--end .tab-->
                            <article class="tab">
                                <h3>Tab Three Content</h3>
                                <p>Tab Three Lorem ipsum dolor sit amet&hellip;</p>
                            </article><!--end .tab-->
                        </div><!--end .tabs-content-->
                    </section><!--end .simple-tabs-->
                </section><!--end #tabs-example-->

                <section class="island" id="form-example">
                    <h1><a href="#form-example">#</a> Form Example</h1>

                    <form action="#" method="post" class="form-validation">
                        <div class="form-errors"></div><!--end .form-errors-->

                        <fieldset>
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="smooth focus-increase" placeholder="John Doe" required />
                        </fieldset>

                        <fieldset>
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="smooth focus-increase" placeholder="example@example.com" required />
                        </fieldset>

                        <fieldset>
                            <label for="phone-number">Phone Number:</label>
                            <input type="tel" name="phone-number" id="phone-number" class="smooth phone-format" placeholder="555-555-5555" />
                        </fieldset>
    
                        <fieldset>
                            <label for="month">Month</label>
                            <select name="month" id="month">
                                <option value="default">Choose</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select><!--end #month-->
                        </fieldset>

                        <fieldset>
                            <input id="gender-male" type="radio" class="replace-input" name="gender" value="Male" />
                            <label for="gender-male">Male</label>

                            <input id="gender-female" type="radio" class="replace-input" name="gender" value="Female" />
                            <label for="gender-female">Female</label>
                        </fieldset>

                        <fieldset>
                            <input id="option-1" type="checkbox" class="replace-input" name="checkbox-options" value="Option 1" />
                            <label for="option-1">Option 1</label>

                            <input id="option-2" type="checkbox" class="replace-input" name="checkbox-options" value="Option 2" />
                            <label for="option-2">Option 2</label>
                        </fieldset>

                        <input type="submit" name="submit" class="button primary brdr brdr-primary form-submit" value="Submit" />
                    </form><!--end .form-validation-->

                    <section class="thank-you">
                        <h3>Thank You</h3>
                            <p>Sample AJAX-type thank you message, see the console to take a look at the serialized data.</p>
                    </section><!--end .thank-you-->
                </section><!--end #form-example-->

                <section class="island" id="css-classes">
                    <h1><a href="#css-classes">#</a> CSS Classes</h1>

                    <table class="css-classes-table shdw-secondary">
                        <thead>
                            <tr>
                                <th>Class</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>.wrap-max</code></td>
                                <td>Wrapper which spans 100%</td>
                            </tr>
                            <tr>
                                <td><code>.wrap</code></td>
                                <td>Wrapper which declares min and max width and provides main gutters.</td>
                            </tr>
                            <tr>
                                <td><code>.line</code></td>
                                <td>Groups units on one horizontal line. Note: for mobile layout units may be stacked to avoid horizontal scrolling.</td>
                            </tr>
                            <tr>
                                <td><code>.unit</code></td>
                                <td>Base class which divides a line into sections (columns).</td>
                            </tr>
                            <tr>
                                <td><code>.sizeXofY</code></td>
                                <td>Extends unit. Indicates the fractional width of the unit, for example size3of4 would take up three quarters, or 75%, of the horizontal space. The following fractions are supported: 1, 1/2, 1/3, 2/3, 1/4, 3/4, 1/5, 2/5, 3/5, 4/5</td>
                            </tr>
                            <tr>
                                <td><code>.lastUnit</code></td>
                                <td>Extends unit. Applied to the last child of every line.</td>
                            </tr>
                            <tr>
                                <td><code>.none</code></td>
                                <td>Sets elements display to none</td>
                            </tr>
                            <tr>
                                <td><code>.hidden</code></td>
                                <td>Hide element from page, moves element from viewport</td>
                            </tr>
                            <tr>
                                <td><code>.invisible</code></td>
                                <td>Makes element invisible</td>
                            </tr>
                            <tr>
                                <td><code>.block</code></td>
                                <td>Makes element a block</td>
                            </tr>
                            <tr>
                                <td><code>.in-block</code></td>
                                <td>Makes element an inline-block and applies fix for IE7</td>
                            </tr>
                            <tr>
                                <td><code>.first</code></td>
                                <td>Removes margin-left from element</td>
                            </tr>
                            <tr>
                                <td><code>.last</code></td>
                                <td>Removes margin-right from element</td>
                            </tr>
                            <tr>
                                <td><code>.left</code></td>
                                <td>Float element left</td>
                            </tr>
                            <tr>
                                <td><code>.right</code></td>
                                <td>Float element right</td>
                            </tr>
                            <tr>
                                <td><code>.clear</code></td>
                                <td>Clear both left and right floats</td>
                            </tr>
                            <tr>
                                <td><code>.t-icon</code></td>
                                <td>Modern pictograms icon font class</td>
                            </tr>
                            <tr>
                                <td><code>.form-validation</code></td>
                                <td>Attaches JS validation and error styling to form</td>
                            </tr>
                            <tr>
                                <td><code>.focus-increase</code></td>
                                <td>Increase input width on focus</td>
                            </tr>

                            <tr>
                                <td><code>.thank-you</code></td>
                                <td>Form post AJAX message container</td>
                            </tr>
                            <tr>
                                <td><code>.custom-checkbox</code></td>
                                <td>Custom checkbox replacement</td>
                            </tr>
                            <tr>
                                <td><code>.custom-radio</code></td>
                                <td>Custom radio replacement</td>
                            </tr>
                            <tr>
                                <td><code>.error</code></td>
                                <td>Apply red text to element</td>
                            </tr>
                            <tr>
                                <td><code>.success, .valid</code></td>
                                <td>Apply green text to element</td>
                            </tr>
                            <tr>
                                <td><code>.btmspc</code></td>
                                <td>Add 2em margin bottom to the element</td>
                            </tr>
                            <tr>
                                <td><code>.btmspc-dbl</code></td>
                                <td>Add 4em margin bottom to the element</td>
                            </tr>
                            <tr>
                                <td><code>.topspc</code></td>
                                <td>Add 2em margin top to the element</td>
                            </tr>
                            <tr>
                                <td><code>.topspc-dbl</code></td>
                                <td>Add 4em margin top to the element</td>
                            </tr>
                            <tr>
                                <td><code>.cntrtxt</code></td>
                                <td>Align text to center</td>
                            </tr>
                            <tr>
                                <td><code>.imgtxt</code></td>
                                <td>If applied to element next to image, allows text to flow next to image and not below.</td>
                            </tr>
                            <tr>
                                <td><code>.loading</code></td>
                                <td>Add loading indicator to element</td>
                            </tr>
                            <tr>
                                <td><code>.sprite</code></td>
                                <td>Sets display to block and hides overflow</td>
                            </tr>
                            <tr>
                                <td><code>.button</code></td>
                                <td>Declares element as a button, makes inline block and attached pointer cursor</td>
                            </tr>
                            <tr>
                                <td><code>.smooth</code></td>
                                <td>Adds transition to element</td>
                            </tr>
                            <tr>
                                <td><code>.brdr</code></td>
                                <td>Border radius fix and CSS3Pie fallback</td>
                            </tr>
                            <tr>
                                <td><code>.brdr-primary</code></td>
                                <td>Applies 5px border radius</td>
                            </tr>
                            <tr>
                                <td><code>.shdw</code></td>
                                <td>Applies box shadow and provides CSS3Pie fallback</td>
                            </tr>
                            <tr>
                                <td><code>.opct</code></td>
                                <td>Changes opacity to 50%</td>
                            </tr>
                            <tr>
                                <td><code>.opct-full</code></td>
                                <td>Changes opacity to 100%</td>
                            </tr>
                            <tr>
                                <td><code>.navigation-object</code></td>
                                <td>Style for standard primary navigation</td>
                            </tr>
                            <tr>
                                <td><code>.list-object</code></td>
                                <td>Removes list-styling from element</td>
                            </tr>
                            <tr>
                                <td><code>.island</code></td>
                                <td>Identifies element as a container block</td>
                            </tr>
                            <tr>
                                <td><code>.primary</code></td>
                                <td>Identifies primary navigation</td>
                            </tr>
                            <tr>
                                <td><code>.modal</code></td>
                                <td>Identifies modal and provide modal style</td>
                            </tr>
                            <tr>
                                <td><code>.overlay</code></td>
                                <td>Overlay container</td>
                            </tr>
                            <tr>
                                <td><code>.overlay-bg</code></td>
                                <td>Provides cross-browser opaque backdrop for modal</td>
                            </tr>
                            <tr>
                                <td><code>.tabs</code></td>
                                <td>Primary tabs container, attaches JS tabs and overall styling</td>
                            </tr>
                            <tr>
                                <td><code>.tabs-content</code></td>
                                <td>Individual .tab container</td>
                            </tr>
                        </tbody>
                    </table><!--end .css-classes-table-->
                </section><!--end #css-classes-->

                <section class="island" id="js-hooks">
                    <h1><a href="#js-hooks">#</a> JS Hooks</h1>

                    <table class="js-hooks-table shdw-secondary">
                        <thead>
                            <tr>
                                <th>Selector</th>
                                <th>Information</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>.overlay</code></td>
                                <td>If element present, loads modal.js file and attaches events. Can be enabled/disabled via <code>WebApp.init(obj);</code>
                                    <div class="topspc">
                                        To launch a modal, <code>rel="modal"</code> attribute and <code>modal_content</code> data attribute are required. To launch an exit ramp, <code>rel="external"</code> and the external href is required.
                                        <div class="topspc">
                                            All modals live in parts/modals.php, <code>data-modal_content</code> is the <code>id</code> of the element to be loaded.
                                        </div>
                                        <div class="topspc">
                                            <code>
                                                rel="modal" data-modal_content="example"<br />
                                                href="http://google.com" rel="external"
                                            </code>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><code>.form-validation</code></td>
                                <td>If element present, loads jquery.validate.min.js, validation.js, and attaches form validation events to all forms with the class <code>.form-validation</code>. Can be enabled/disabled via <code>WebApp.init(obj);</code>
                                    <div class="topspc">
                                        validation.js provides additional regex methods, overall validation pattern, and AJAX example.
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><code>.replace-input</code></td>
                                <td>If element present, loads jquery.customInput.js and replaces any checkbox or radio input that has the class <code>.replace-input</code>.  Can be enabled/disabled via <code>WebApp.init(obj);</code></td>
                            </tr>
                            <tr>
                                <td><code>.tabs</code></td>
                                <td>Selector ursed for main styling, tabs JavaScript is automatically loaded unless removed from load order in (app.js). A new instance of tabs can then be made via <code>new g5Tabs();</code>
                                    <div class="topspc">
                                        <code>
                                            var simpleTabs = new g5Tabs();<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;simpleTabs.init({<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;el: $('.simple-tabs')<br />
                                            });
                                        </code>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><code>.scroll-to</code></td>
                                <td>On click smoothly scrolls to 70px before element with id thats equals to the anchor href value
                                    <div class="topspc">
                                        <code>
                                            $document.find('.scroll-to').on('click', function(){<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;var scrollDestination = $(this).attr('href');<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;$(scrollDestination).smoothScroll();<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;return false;<br />
                                            });
                                        </code>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><code>.print</code></td>
                                <td>On click dispatches print event</td>
                            </tr>
                        </tbody>
                    </table><!--end .js-hooks-table-->
                </section><!--end #js-hooks-->

                <section class="island" id="principles">
                    <h1><a href="#principles">#</a> Principles</h1>
                    <ul class="list">
                        <li><a href="http://www.html5rocks.com/en/mobile/responsivedesign/">Mobile First</a></li>
                        <li><a href="http://www.w3.org/wiki/Graceful_degredation_versus_progressive_enhancement">Graceful Degradation / Progressive Enhancement</a></li>
                        <li><a href="http://html5doctor.com/using-modernizr-to-detect-html5-features-and-provide-fallbacks/">Feature Detection</a></li>
                        <li><a href="http://en.wikipedia.org/wiki/Single_responsibility_principle">Single Responsibility Principle</a></li>
                    </ul><!--end .list-->
                </section><!--end #principles-->

                <section class="island" id="notes">
                    <h1><a href="#notes">#</a> Notes</h1>
                    <ul class="list">
                        <li>Before moving to production, remember to make a fresh build of Modernizr, concatenate, minify, and GZip all CSS &amp; JS assets</li>
                        <li>Consider switching to CSS3 Pie 1 as it's more stable than Pie 2 beta 1 (your testing needs to justify this)</li>
                        <li>Refer to this <a href="http://a11yproject.com/checklist.html">checklist</a> to make sure the website is accessible.</li>
                        <li>Only keep what you need from the boilerplate, don't load assets that are not going to be used</li>
                    </ul><!--end .list-->
                </section><!--end #notes-->

                <section class="island" id="related-style-guides">
                    <h1><a href="#related-style-guides">#</a> Related Style Guides</h1>
                    <ul class="list">
                        <li><a href="http://google-styleguide.googlecode.com/svn/trunk/htmlcssguide.xml">Google HTML/CSS Style Guide</a></li>
                        <li><a href="http://google-styleguide.googlecode.com/svn/trunk/javascriptguide.xml">Google JS Style Guide</a></li>
                        <li><a href="http://isobar-idev.github.com/code-standards/">Isobar Code Standards</a></li>
                    </ul><!--end .list-->
                </section><!--end #related-style-guides-->

                <section class="island" id="related-reading">
                    <h1><a href="#related-reading">#</a> Related Reading</h1>
                    <ul class="list">
                        <li><a href="https://github.com/stubbornella/oocss/wiki/Grids">OOCSS Grid</a></li>
                        <li><a href="http://microformats.org/wiki/Main_Page">Microformats</a></li>
                        <li><a href="http://a11yproject.com/checklist.html">Accessibility Checklist</a></li>
                        <li><a href="https://developer.mozilla.org/en-US/docs/JavaScript/Reference/Functions_and_function_scope/Strict_mode">Strict Mode</a></li>
                        <li><a href="http://elvery.net/demo/responsive-tables/">Responsive Tables</a></li>
                        <li><a href="http://stackoverflow.com/questions/9638247/is-jquery-browser-deprecated">$.browser Property</a></li>
                        <li><a href="http://www.jonathantneal.com/blog/understand-the-favicon/">Understand the Favicon</a></li>
                        <li><a href="http://bradfrostweb.com/blog/mobile/the-many-faces-of-mobile-first/">The many faces of mobile first</a></li>
                    </ul><!--end .list-->
                </section><!--end #related-reading-->

                <section class="island" id="favorites">
                    <h1><a href="#favorites">#</a> Favorites</h1>
                    <ul class="list">
                        <li><a href="https://developer.mozilla.org/en-US/">MDN</a></li>
                        <li><a href="http://html5please.com/">HTML5 Please</a></li>
                        <li><a href="http://css3please.com/">CSS3 Please</a></li>
                        <li><a href="http://a11yproject.com/">The Accessibility Project</a></li>
                        <li><a href="http://www.webplatform.org/">Web Platform</a></li>
                    </ul><!--end .list-->
                </section><!--end #favorites-->