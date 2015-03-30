<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">

<title>Syllabus Builder</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/style.css">

<script src="js/libs/modernizr.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<header class="masthead">
    <nav>
        <ul>
            <li><a href="#save">Save</a></li>
            <li><a href="#example" class="example">Example</a></li>
            <li><a href="#preview" class="preview">Preview</a></li>
            <li><a href="#clipboard">Clipboard</a></li>
        </ul>
    </nav>
</header>

<div id="wrapper">
    <nav id="tabs">
        <ul>
            <li class="information"><a href="#information">Information</a></li>
            <li class="outcomes"><a href="#outcomes">Outcomes</a></li>
            <li class="resources"><a href="#resources">Resources</a></li>
            <li class="activities"><a href="#activities">Activities</a></li>
            <li class="policies"><a href="#policies">Policies</a></li>
            <li class="grades"><a href="#grades">Grades</a></li>
        </ul>
    </nav>
    
    <form id="controlPanel">
        <aside class="information" data-target="#information .content">
            <section data-target="header">
                <header>
                    Syllabus Title
                </header>
                <fieldset data-method="toggleContent" data-element="h1" data-text='["Course Name", "Course Number | Term/Year","Title Text"]' data-max="3" data-min="1" data-target="hgroup">
                    <legend>Title</legend>
                    <label for="informationTitleAdd">Add title</label>
                    <input type="button" name="informationTitleAdd" id="informationTitleAdd" value="+">
                    <label for="informationTitleRemove">Remove title</label>
                    <input type="button" name="informationTitleAdd" id="informationTitleRemove" value="-">
                </fieldset>
            </section>
            
            <section data-target=".section1">
                <header>
                    Section 1
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="informationContentSpacingAdd">Add spacing</label>
                    <input type="button" name="informationContentSpacingAdd" id="informationContentSpacingAdd" value="+">
                    <label for="informationContentSpacingRemove">Remove spacing</label>
                    <input type="button" name="informationContentSpacingRemove" id="informationContentSpacingRemove" value="-">
                </fieldset>
                <fieldset data-method="toggleContent" data-element=".contact" data-max="4" data-min="1" data-target=".contacts">
                    <legend>contacts</legend>
                    <label for="informationContactAdd">Add contact</label>
                    <input type="button" name="informationContactAdd" id="informationContactAdd" value="+">
                    <label for="informationContactRemove">Remove contact</label>
                    <input type="button" name="informationContactRemove" id="informationContactRemove" value="-">
                </fieldset>
            </section>
            
            <section data-target=".section2" class="ui-state-default">
                <header data-method="toggleContent">
                    <input type="button" value="Section 2">
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="informationContactExtraSpacingAdd">Add spacing</label>
                    <input type="button" name="informationContactExtraSpacingAdd" id="informationContactExtraSpacingAdd" value="+">
                    <label for="informationContactExtraSpacingRemove">Remove spacing</label>
                    <input type="button" name="informationContactExtraSpacingRemove" id="informationContactExtraSpacingRemove" value="-">
                </fieldset>
            </section>
            
            <section data-target=".section3" class="ui-state-active">
                <header data-method="toggleContent">
                    <input type="button" value="Course Description">
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="informationDescriptionAdd">Add spacing</label>
                    <input type="button" name="informationDescriptionAdd" id="informationDescriptionAdd" value="+">
                    <label for="informationDescriptionRemove">Remove spacing</label>
                    <input type="button" name="informationDescriptionRemove" id="informationDescriptionRemove" value="-">
                </fieldset>
            </section>
            
            <section data-target=".section4" class="ui-state-default">
                <header data-method="toggleContent">
                    <input type="button" value="Section 4">
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="informationDescriptionExtraAdd">Add spacing</label>
                    <input type="button" name="informationDescriptionExtraAdd" id="informationDescriptionExtraAdd" value="+">
                    <label for="informationDescriptionRemove">Remove spacing</label>
                    <input type="button" name="informationDescriptionExtraRemove" id="informationDescriptionExtraRemove" value="-">
                </fieldset>
            </section>
        </aside>
        
        <aside class="outcomes" data-target="#outcomes .content">
            <section data-target=".section1">
                <header data-method="toggleContent" class="ui-state-active">
                   <input type="button" value="Outcomes">
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="outcomesContentSpacingAdd">Add spacing</label>
                    <input type="button" name="outcomesContentSpacingAdd" id="outcomesContentSpacingAdd" value="+">
                    <label for="outcomesContentSpacingRemove">Remove spacing</label>
                    <input type="button" name="outcomesContentSpacingRemove" id="outcomesContentSpacingRemove" value="-">
                </fieldset>
                <fieldset data-method="toggleContent" data-target=".outcomes" data-element="li" data-text="Outcome text here">
                    <legend>outcomes</legend>
                    <label for="outcomesOutcomeAdd">Add outcome</label>
                    <input type="button" name="outcomesOutcomeAdd" id="outcomesOutcomeAdd" value="+">
                    <label for="outcomesOutcomeRemove">Remove outcome</label>
                    <input type="button" name="outcomesOutcomeRemove" id="outcomesOutcomeRemove" value="-">
                </fieldset>
            </section>
            
            <section data-target=".section1" class="ui-state-active">
                <header>
                    <a href="#" class="toggler">Bloom's Revised</a>
                </header>
                <dl data-method="taxonomy" data-target=".outcomes">
                    <dt>Remember</dt>
                        <dd>Choose</dd>
                        <dd>Define</dd>
                        <dd>Describe</dd>
                        <dd>Identify</dd>
                        <dd>Label</dd>
                        <dd>List</dd>
                        <dd>Locate</dd>
                        <dd>Match</dd>
                        <dd>Memorize</dd>
                        <dd>Name</dd>
                        <dd>Omit</dd>
                        <dd>Recite</dd>
                        <dd>Recognize</dd>
                        <dd>Select</dd>
                        <dd>State</dd>
                    <dt>Understand</dt>
                        <dd>Classify</dd>
                        <dd>Defend</dd>
                        <dd>Demonstrate</dd>
                        <dd>Distinguish</dd>
                        <dd>Explain</dd>
                        <dd>Express</dd>
                        <dd>Extend</dd>
                        <dd>Give example</dd>
                        <dd>Illustrate</dd>
                        <dd>Indicate</dd>
                        <dd>Infer</dd>
                        <dd>Interpret</dd>
                        <dd>Judge</dd>
                        <dd>Paraphrase</dd>
                        <dd>Represent</dd>
                        <dd>Restate</dd>
                        <dd>Rewrite</dd>
                    <dt>Apply</dt>
                        <dd>Act</dd>
                        <dd>Articulate</dd>
                        <dd>Assess</dd>
                        <dd>Change</dd>
                        <dd>Chart</dd>
                        <dd>Compute</dd>
                        <dd>Construct</dd>
                        <dd>Contribute</dd>
                        <dd>Control</dd>
                        <dd>Determine</dd>
                        <dd>Develop</dd>
                        <dd>Discover</dd>
                        <dd>Draw</dd>
                        <dd>Establish</dd>
                        <dd>Extend</dd>
                        <dd>Imitate</dd>
                        <dd>Implement</dd>
                        <dd>Include</dd>
                        <dd>Participate</dd>
                        <dd>Predict</dd>
                        <dd>Prepare</dd>
                        <dd>Produce</dd>
                        <dd>Provide</dd>
                        <dd>Show</dd>
                    <dt>Analyze</dt>
                        <dd>Break down</dd>
                        <dd>Characterize</dd>
                        <dd>Classify</dd>
                        <dd>Compare</dd>
                        <dd>Contrast</dd>
                        <dd>Correlate</dd>
                        <dd>Deduce</dd>
                        <dd>Diagram</dd>
                        <dd>Differentiate</dd>
                        <dd>Discriminate</dd>
                        <dd>Distinguish</dd>
                        <dd>Examine</dd>
                        <dd>Limit</dd>
                        <dd>Outline</dd>
                        <dd>Prioritize</dd>
                        <dd>Research</dd>
                        <dd>Relate</dd>
                        <dd>Subdivide</dd>
                    <dt>Evaluate</dt>
                       	<dd>Appraise</dd>
                        <dd>Argue</dd>
                        <dd>Criticize</dd>
                        <dd>Critique</dd>
                        <dd>Debate</dd>
                        <dd>Estimate</dd>
                        <dd>Evaluate</dd>
                        <dd>Justify</dd>
                        <dd>Prioritize</dd>
                        <dd>Rate</dd>
                        <dd>Value</dd>
                        <dd>Weigh</dd>
                    <dt>Create</dt>
                       	<dd>Combine</dd>
                        <dd>Compose</dd>
                        <dd>Construct</dd>
                        <dd>Create</dd>
                        <dd>Design</dd>
                        <dd>Devise</dd>
                        <dd>Forecast</dd>
                        <dd>Formulate</dd>
                        <dd>Hypothesize</dd>
                        <dd>Invent</dd>
                        <dd>Make</dd>
                        <dd>Originate</dd>
                        <dd>Plan</dd>
                        <dd>Produce</dd>
                        <dd>Propose</dd>
                        <dd>Role play</dd>
                </dl>
            </section>
            
            <section data-target=".section2" class="ui-state-default">
                <header data-method="toggleContent">
                    <input type="button" value="Section 2">
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="informationDescriptionExtraAdd">Add spacing</label>
                    <input type="button" name="informationDescriptionExtraAdd" id="informationDescriptionExtraAdd" value="+">
                    <label for="informationDescriptionRemove">Remove spacing</label>
                    <input type="button" name="informationDescriptionExtraRemove" id="informationDescriptionExtraRemove" value="-">
                </fieldset>
            </section>
        </aside>
        
        <aside class="resources" data-target="#resources .content">
            
            <section data-target=".section1">
                <header>
                    Resources
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="resourcesContentSpacingAdd">Add spacing</label>
                    <input type="button" name="resourcesContentSpacingAdd" id="resourcesContentSpacingAdd" value="+">
                    <label for="resourcesContentSpacingRemove">Remove spacing</label>
                    <input type="button" name="resourcesContentSpacingRemove" id="resourcesContentSpacingRemove" value="-">
                </fieldset>
                <fieldset data-method="toggleContent" data-template=".description" data-element=".description" data-max="20" data-min="0" data-target=".details">
                    <legend>headings</legend>
                    <label for="resourceAdd">Add resource</label>
                    <input type="button" name="resourceAdd" id="resourceAdd" value="+">
                    <label for="resourceRemove">Remove resource</label>
                    <input type="button" name="resourceRemove" id="resourceRemove" value="-">
                </fieldset>
            </section>
            
            <section data-target=".section2" class="ui-state-default">
                <header data-method="toggleContent">
                    <input type="button" value="Section 2">
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="resourceSection2SpacingAdd">Add spacing</label>
                    <input type="button" name="resourceSection2SpacingAdd" id="resourceSection2SpacingAdd" value="+">
                    <label for="resourceSection2SpacingRemove">Remove spacing</label>
                    <input type="button" name="resourceSection2SpacingRemove" id="resourceSection2SpacingRemove" value="-">
                </fieldset>
            </section>
        </aside>
        
        <aside class="activities" data-target="#activities .content">
            <section data-target=".section1">
                <header>
                    Activities
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="activityContentSpacingAdd">Add spacing</label>
                    <input type="button" name="activityContentSpacingAdd" id="activityContentSpacingAdd" value="+">
                    <label for="activityContentSpacingRemove">Remove spacing</label>
                    <input type="button" name="activityContentSpacingRemove" id="activityContentSpacingRemove" value="-">
                </fieldset>
                <fieldset data-method="toggleContent" data-template=".description" data-element=".description" data-max="20" data-min="0" data-target=".details">
                    <legend>headings</legend>
                    <label for="activityAdd">Add activity</label>
                    <input type="button" name="activityAdd" id="activityAdd" value="+">
                    <label for="activityRemove">Remove activity</label>
                    <input type="button" name="activityRemove" id="activityRemove" value="-">
                </fieldset>
            </section>
            
            <section data-target=".section2" class="ui-state-default">
                <header data-method="toggleContent">
                    <input type="button" value="Section 2">
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="activitySection2SpacingAdd">Add spacing</label>
                    <input type="button" name="activitySection2SpacingAdd" id="activitySection2SpacingAdd" value="+">
                    <label for="activitySection2SpacingRemove">Remove spacing</label>
                    <input type="button" name="activitySection2SpacingRemove" id="activitySection2SpacingRemove" value="-">
                </fieldset>
            </section>
        </aside>
        
        <aside class="policies" data-target="#policies .content">
            <section data-target=".section1">
                <header>
                    Policies
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="policiesContentSpacingAdd">Add spacing</label>
                    <input type="button" name="policiesContentSpacingAdd" id="policiesContentSpacingRemove" value="+">
                    <label for="policiesContentSpacingRemove">Remove spacing</label>
                    <input type="button" name="policiesContentSpacingRemove" id="policiesContentSpacingRemove" value="-">
                </fieldset>
                <fieldset data-method="toggleContent" data-template=".description" data-element=".description" data-max="20" data-min="0" data-target=".details">
                    <legend>headings</legend>
                    <label for="policyAdd">Add activity</label>
                    <input type="button" name="policyAdd" id="policyAdd" value="+">
                    <label for="policyRemove">Remove activity</label>
                    <input type="button" name="policyRemove" id="policyRemove" value="-">
                </fieldset>
            </section>
            
            <section data-target=".section2" class="ui-state-default">
                <header data-method="toggleContent">
                    <input type="button" value="Section 2">
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="policySection2SpacingAdd">Add spacing</label>
                    <input type="button" name="policySection2SpacingAdd" id="policySection2SpacingAdd" value="+">
                    <label for="policySection2SpacingRemove">Remove spacing</label>
                    <input type="button" name="policySection2SpacingRemove" id="policySection2SpacingRemove" value="-">
                </fieldset>
            </section>
            
            <section data-target=".section3" class="ui-state-default">
                <header data-method="toggleContent">
                    <input type="button" value="Section 3">
                </header>
                <fieldset data-method="scaleCss" data-property="padding-top" data-max="12" data-min="0" data-step="12px">
                    <legend>spacing</legend>
                    <label for="policySection3SpacingAdd">Add spacing</label>
                    <input type="button" name="policySection3SpacingAdd" id="policySection3SpacingAdd" value="+">
                    <label for="policySection3SpacingRemove">Remove spacing</label>
                    <input type="button" name="policySection3SpacingRemove" id="policySection3SpacingRemove" value="-">
                </fieldset>
            </section>
        </aside>
    </form>
    
    <div role="main" id="container">
        <div id="page">

    		<!-- each tab is represented by a section with an ID that identifies it -->
            <section id="information">
                
            	<!-- content class is the initial content for the tab -->
                <div class="content">
                    <header>
                        <hgroup>
                            <h1>Course Title</h1>
                            <h1>Course Number | Term/Year</h1>
                        </hgroup>
                    </header>
                    
                    <div class="section1">
                    	<h2 class="editable">Contact Information</h2>
                        
                        <div class="contacts">
                            <div class="contact">
                                <h3 class="editable">Contact Title 1</h3>
                                <div class="editableHtml">
                                    <ul class="none">
                                        <li>name</li>
                                        <li>email</li>
                                        <li>phone</li>
                                        <li>other1</li>
                                        <li>other2</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="contact hide">
                                <h3 class="editable">Contact Title 2</h3>
                                <div class="editableHtml">
                                    <ul class="none">
                                        <li>name</li>
                                        <li>email</li>
                                        <li>phone</li>
                                        <li>other1</li>
                                        <li>other2</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="contact hide">
                                 <h3 class="editable">Contact Title 3</h3>
                                 <div class="editableHtml">
                                     <ul class="none">
                                         <li>name</li>
                                         <li>email</li>
                                         <li>phone</li>
                                         <li>other1</li>
                                         <li>other2</li>
                                     </ul>
                                 </div>
                             </div>
                             
                            <div class="contact hide">
                                 <h3 class="editable">Contact Title 4</h3>
                                 <div class="editableHtml">
                                     <ul class="none">
                                         <li>name</li>
                                         <li>email</li>
                                         <li>phone</li>
                                         <li>other1</li>
                                         <li>other2</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                    </div><!-- .section1 -->
                    
                    <div class="section2 hide">
                        <h2 class="editable">Section 2</h2>
                        <div class="editableHtml">
                            Text
                        </div>                    
                    </div><!-- .section2 -->
                    
                    <div class="section3">
                        <h2 class="editable">Course Description</h2>
                        <div class="editableHtml">
                            Course Description text
                        </div>
                    </div><!-- .section3 -->
                
                    <div class="section4 hide">
                        <h2 class="editable">Section 4</h2>
                        <div class="editableHtml">
                            Text
                        </div>                    
                    </div><!-- .section4 -->
                </div><!-- .content -->
                
                <!-- example class is for the example for the tab -->
                <div class="example">
                    <header>
                        <hgroup>
                            <h1>Creating Effective Syllabi in Higher Education</h1>
                            <h1>FACT 1010 | Fall 2025</h1>
                        </hgroup>
                    </header>
                    
                    <div class="section1">
                    	<h2>Contact Information</h2>                    
                   
                        <div class="contacts">
                            <h3>Instructor</h3>
                            <div>
                                <ul>
                                    <li>Caroline Baker</li>
                                    <li>caroline.baker@usu.edu</li>
                                    <li>797-9000</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="contacts">
                            <h3>Teaching Assistant</h3>
                            <div>
                                <ul>
                                    <li>Mark diGrades</li>
                                    <li>markdigrades@usu.edu</li>
                                </ul>
                            </div>
                        </div>
                         
                    </div><!-- .section1 -->
                    
                    <div class="section2">
                        <h2>Welcome to Class</h2>
                        <div>
                            Welcome to FACT 1010! I have been teaching this course for four years now, and I learn something new each semester. While this class is focused on creating a syllabus for teaching in higher education, I think you will find the principles will apply to many instructional contexts. I would like each student to create his or her own learning experience within the framework I have developed, so if you have ideas-- let's talk.<br /><br />
Please take the time to review this syllabus thoroughly. It has all the information you need to be successful in this course. After you have read the syllabus, if any part of the course is unclear, please email me.
                        </div>                    
                    </div><!-- .section2 -->
                    
                    <div class="section3">
                        <h2>Course Description</h2>
                        <div>
                            This accelerated online course will provide students with opportunities to learn the components of a syllabus for online higher education courses. Students will explore their instructional strengths and weaknesses as indicated by an inventory of their personal beliefs, knowledge and practices. Students will create a syllabus that identifies their instructional outcomes, resources and activities, and integrates a learning contract and a communication strategy. To conclude the course, each student will conduct an evaluation of another student's syllabus.
                        </div>
                    </div><!-- .section3 -->               
                 </div><!-- .example -->
            </section><!-- #information -->
                        
            <section id="outcomes">
                <div class="content">
                    <div class="section1">
                        <h2 class="editable">Course Outcomes</h2>
                        <div class="editableHtml">
                            Upon completion of this course you will be able to:
                        </div>
                        <!-- bullets should be visible in this list -->
                        <div class="editableHtml">
                            <ul class="outcomes">
                                <li>Outcome text here</li>
                            </ul>
                        </div>
                    </div><!-- .section1 -->
                    
                    <div class="section2 hide">
                        <h2 class="editable">Section 2</h2>
                        <div class="editableHtml">
                            Text
                        </div>                    
                    </div><!-- .section2 -->                    
                </div><!-- .content -->
                
                <div class="example">
                    <div class="section1">
                        <h2>Course Outcomes</h2>
                        <div>
                            Upon completion of this course you will be able to:
                        </div>
                        <div>
                        <!-- bullets should be visible in this list -->
                            <ul>
                                <li>Identify the basic components of a higher education syllabus</li>
                                <li>Conduct a Personal Resources Inventory</li>
                                <li>Develop a course communication strategy</li>
                                <li>Identify strategies for learner success</li>
                                <li>Construct a syllabus that demonstrates the proceeding outcomes</li>
                            </ul>
                        </div>
                    </div><!-- .section1 -->
                </div><!-- .example -->                     
            </section><!-- #outcomes -->
            

            <section id="resources">
                <div class="content">
                    <div class="section1">
                        <h2 class="editable">Course Resources</h2>
                        <div class="details">
                            <div class="description">
                                <h3 class="editable">Canvas</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Technical Support</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Software</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Textbook & Reading Materials</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Videos</h3>
                                <div class="editableHtml">
                             		Text
                                </div>                                                                                                
                            </div>                                                                                                
                        </div>                                                                                                
                    </div><!-- .section1 -->
                    
                    <div class="section2 hide">
                        <h2 class="editable">Section 2</h2>
                        <h3 class="editable">Heading</h3>
                        <div class="editableHtml">
                            Text
                        </div>                    
                    </div><!-- .section2 -->                    
                </div><!-- .content -->
                
                <div class="example">
                    <div class="section1">
                        <h2>Course Resources</h2>
                        <h3>Canvas</h3>
                        <div>
                     		Canvas is the Learning Management System that we will use for our course. You can login to Canvas at http://online.usu.edu. Login with your A-Number and strong password (the same credentials you use for Access or AggieMail). You will find a number of Student Tutorials for Canvas on this login page.
                        </div>
                        <h3>Technical Support</h3>
                        <div>
                     		For any technical problems with your computer related to accessing Canvas, please contact the IT Service Desk at 435.797.HELP(4357). There is a "Live Chat" feature, hours of availability and email information on the http://online.usu.edu page.
                        </div>
                        <h3>Software</h3>
                        <div>
                     		Documents in this course will be presented in PDF format. You will need Adobe Reader to view these files, which you can obtain for free at http://get.adobe.com/reader/.
                        </div>
                        <h3>Textbook & Reading Materials</h3>
                        <div>
                     		The text for this class will be The Course Syllabus: A Learning-Centered Approach by O'brein, Millis & Cohen, second edition, published by Jossey-Bass, ISDN#047019617. You may purchase this book at the bookstore or online. Make sure you get the second edition!<br /><br />
                            Readings will be taken from peer-reviewed journals and education magazines. Most readings will be available in Canvas in PDF format. Other readings will be available online, with a hyperlink provided in Canvas.
                        </div>
                        <h3>Video Presentations</h3>
                        <div>
                     		Weekly online presentations will be posted on Canvas. A video of the slides with the instructor's narration will be accessed by connecting online to a media server (you will not need to have a media player installed on your machine). The slides will be provided as a .pdf file which can be viewed on your computer, downloaded and printed.
                        </div>                                                                                                
                    </div><!-- .section1 -->
                </div><!-- .example -->                     
            </section><!-- #resources -->            
            
            <section id="activities">
                <div class="content">
                    <div class="section1">
                        <h2 class="editable">Course Activities</h2>
                        <div class="details">
                            <div class="description">
                                <h3 class="editable">Readings</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Videos</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Discussions</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Assignments</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Quizzes</h3>
                                <div class="editableHtml">
                             		Text
                                </div>                        
                            </div>                        
                            <div class="description">
                                <h3 class="editable">Exams</h3>
                                <div class="editableHtml">
                             		Text
                                </div>                                                                                                
                            </div>                                                                                                
                        </div>                                                                                                
                    </div><!-- .section1 -->
                    
                    <div class="section2 hide">
                        <h2 class="editable">Section 2</h2>
                        <h3 class="editable">Heading</h3>
                        <div class="editableHtml">
                            Text
                        </div>                    
                    </div><!-- .section2 -->                    
                </div><!-- .content -->
                
                <div class="example">
                    <div class="section1">
                        <h2>Course Activities</h2>
                        <h3>Readings</h3>
                        <div>
                     		We will read approximately one chapter from the textbook and one or two Additional Readings each week. Assignments related to the readings will alternate between a weekly quiz and a weekly discussion.
                        </div>
                        <h3>Video Presentations</h3>
                        <div>
                     		Most weeks there will be an Instructor presentation related to the readings. You are expected to complete all readings before viewing the presentation. The presentation will be focused more on synthesis and expansion of the reading materials, so it is your responsibility to gain a basic understanding of the reading materials first.
                        </div>
                        <h3>Quizzes</h3>
                        <div>
                     		You will be required to complete four "No-pressure Quizzes". These quizzes will consist of approximately ten multiple-choice, fill-in-the-blank, matching and/or true/false questions based on the readings and presentations. You are expected to complete all readings and view the presentation before you take the quiz. You must get ALL the quiz questions correct to receive ANY quiz points, but you may RETAKE the quiz as many times as you would like.
                        </div>
                        <h3>Discussions</h3>
                        <div>
                     		You will participate in four Discussions on Canvas (one introduction and three regular). In order to earn the Discussion Points, you must post one message and two replies (where you reply to someone else's message) for each Discussion Topic.
                        </div>
                        <h3>Assignments</h3>
                        <div>
                     		There will be six Assignments for this course: Personal Resources Inventory,  Learning Contract, Communication Strategies, Learning Strategies, Course Syllabus and Syllabus Evaluation. Complete information on these activities is available on Canvas. Please refer to the "Grading" section for the Assignment point values.<br /><br />
							Assignment files will be in PDF format. You will be able to add information to these files, and save a copy for submission. For more information, watch this video: http://www.youtube.com/watch?v=4uolYGsmxlE.<br /><br />
							Assignments will posted in Canvas using the Assignments tool (see the "Canvas Support" in the "Begin Here" section for instructions on using this tool). Students will use the Assignment tool to download the Assignment instructions file and submit the completed Assignments. You are responsible for knowing how to use the Assignment tool. Late submissions due to improper usage of the Assignment tool will not be accepted.
                        </div>                                                                                                
                    </div><!-- .section1 -->
                </div><!-- .example -->                     
            </section><!-- #activities -->                
            
            <section id="policies">
                <div class="content">
                    <div class="section1">
                        <h2 class="editable">Course Policies</h2>
                        <div class="details">
                            <div class="description">
                                <h3 class="editable">Instructor Feedback/Communication</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Student Feedback/Communication</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Syllabus Changes</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Submitting Electronic Files</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                            <div class="description">
                                <h3 class="editable">Course Fees</h3>
                                <div class="editableHtml">
                             		Text
                                </div>                        
                            </div>                        
                            <div class="description">
                                <h3 class="editable">Late Work</h3>
                                <div class="editableHtml">
                             		Text
                                </div>
                            </div>
                        </div>
                    </div><!-- .section1 -->
                    
                    <div class="section2 hide">
                        <h2 class="editable">Section 2</h2>
                        <h3 class="editable">Heading</h3>
                        <div class="editableHtml">
                            Text
                        </div>                    
                    </div><!-- .section2 -->                    

                    <div class="section3 hide">
                        <h2 class="editable">Section 3</h2>
                        <h3 class="editable">Heading</h3>
                        <div class="editableHtml">
                            Text
                        </div>                    
                    </div><!-- .section3 -->   
                </div><!-- .content -->
                
                <div class="example">
                    <div class="section1">
                        <h2>Course Policies</h2>
                        <h3>Instructor Feedback/Communication</h3>
                        <div>
							I will be reading the Discussion Boards and replying to messages occasionally. You will receive specific feedback on your Assignments in the form of text comments appended to your electronic submissions.<br /><br />
							I will use the Announcements tool in Canvas to communicate changes to the course and other course information. For information on using the Announcements tool, view the video at http://podcasts.usu.edu/MediaPlayer/genplayer.html?filename=Podcasts/canvas/tutorials/AnnouncementsSubtitled.mov.<br /><br />
							I will contact individual students through the Canvas Conversations tool.
                        </div>
                        <h3>Student Feedback/Communication</h3>
                        <div>
							I welcome all feedback on the course. My preferred method of communication with individual students is through the Canvas Conversations tool, which forwards to my USU email account: caroline.baker@usu.edu. I will respond to messages within two week days (Monday – Friday).<br /><br />
							If you experience a legitimate emergency (according to my standards) that will prevent you from completing required coursework on time, I expect you to communicate with me at the earliest reasonable opportunity. Please state the nature of the emergency, and when you expect to turn in the coursework.
                        </div>
                        <h3>Syllabus Changes</h3>
                        <div>
							I have made every effort to present accurate and complete information, but this syllabus is subject to changes. I will notify the class regarding all changes.<br /><br /> 
							In the event of any discrepancy between information in this syllabus and on Canvas, the information in CANVAS WILL TAKE PRECENDENCE.
                        </div>
                        <h3>Submitting Electronic Files</h3>
                        <div>
							All electronic files must be submitted in PDF format. Please name your file in the using the following convention: Assignmentname_Yourname.doc. Thus, if my name where Alex Noteworthy and I was submitting the "Syllabus Draft" assignment, I would rename the "SyllabusDraft.pdf" file as "SyllabusDraft_AlexNoteworthy.pdf".<br /><br /> 
							Files in formats other than PDF and/or without the proper naming convention (or at least a reasonable attempt) will be returned to the student and additional handling charges (lost points) may apply.
                        </div>
                        <h3>Course Fees</h3>
                        <div>
							There are no course fees associated with this course.
                        </div>                        
                        <h3>Late Work</h3>
                        <div>
							Late work due to procrastination will not be accepted. Late work due to legitimate emergency may be accepted.<br /><br />
							The due date and time associated with each quiz, discussion, exam and assignment are stated clearly in Canvas and on the Course Schedule.
                        </div>                                                                                                
                    </div><!-- .section1 -->
                    
                    <!-- The UNIVERSITY POLICIES information is stored in a MY SQL database. These fields will be dynamically populated through a web service. -->
                    <div class="section3">
                        <h2>University Policies</h2>
                        <h3>Honor Pledge</h3>
                        <div>
							Students will be held accountable to the Honor Pledge which they have agreed to: "I pledge, on my honor, to conduct myself with the foremost level of academic integrity."
                        </div>
                        <h3>Academic Honesty</h3>
                        <div>
							The Instructor of this course will take appropriate actions in response to Academic Dishonesty, as defined by the University's Student Code:<br /><br />
Acts of academic dishonesty include but are not limited to:<br /><br />
							<!-- Manual break tags are used inline to create space between list items. Create new class in CSS? -->
                            <ol>
                            	<li>Cheating: (1) using or attempting to use or providing others with any unauthorized assistance in taking quizzes, tests, examinations, or in any other academic exercise or activity, including working in a group when the instructor has designated that the quiz, test, examination, or any other academic exercise or activity be done "individually"; (2) depending on the aid of sources beyond those authorized by the instructor in writing papers, preparing reports, solving problems, or carrying out other assignments; (3) substituting for another student, or permitting another student to substitute for oneself, in taking an examination or preparing academic work; (4) acquiring tests or other academic material belonging to a faculty member, staff member, or another student without express permission; (5) continuing to write after time has been called on a quiz, test, examination, or any other academic exercise or activity; (6) submitting substantially the same work for credit in more than one class, except with prior approval of the instructor; or (7) engaging in any form of research fraud.</li><br />
                                <li>Falsification: altering or fabricating any information or citation in an academic exercise or activity.</li><br />
                                <li>Plagiarism: representing, by paraphrase or direct quotation, the published or unpublished work of another person as one's own in any academic exercise or activity without full and clear acknowledgment. It also includes using materials prepared by another person or by an agency engaged in the sale of term papers or other academic materials.</li>
                              </ol> 
                        </div>
						<a href="http://www.usu.edu/studentservices/studentcode/" target="_blank">The complete Code of Policies and Procedures for Students at Utah State University can be viewed at: http://www.usu.edu/studentservices/studentcode/.</a>
                        <h3>Students with Disabilities</h3>
                        <div>
							Students with ADA-documented physical, sensory, emotional or medical impairments may be eligible for reasonable accommodations. Veterans may also be eligible for services. All accommodations are coordinated through the Disability Resource Center (DRC) in Room 101 of the University Inn, (435)797-2444 voice, (435)797-0740 TTY, (435)797-2444 VP, or toll free at 1-800-259-2966. Please contact the DRC as early in the semester as possible. Alternate format materials (Braille, large print or digital) are available with advance notice.
                        </div>
                    </div><!-- .section3 -->                    
                </div><!-- .example -->                     
            </section><!-- #policies -->

            <section id="grades">
                <div class="content">
                    <div class="section1">
                        <h2 class="editable">Grades</h2>
                        <div class="editableHtml">
                     		Your grade will be based on the following components:
                        </div>
                    	<!-- Components table. By default, three component rows are shown with values of "Component" & "Points". Users can delete all but ONE ROW, and may add a maximum of 15. When a row is deleted, the points are subtracted from the TOTAL POINTS, and the values of the row are reset to "Component" & "0".--> 
                        <div class="editableHtml">
                     		Your grade will be calculated with this scale:
                        </div>
                    	<!-- Grading scale table. The UPPER point range is always calculated by subtracting one point from the LOWER point range of the row above. Users can change the LOWER perctange value, which will recalculate the UPPER percentage value for the next row by subtracting 1, and then recalculating the points.-->                                                                                                
                    </div><!-- .section1 -->
                </div><!-- .content -->
                
                <div class="example">
                    <div class="section1">
                        <h2>Grades</h2>
                        <div>
                     		Your grade will be based on the following components:
                        </div>
                    	<!-- Components example table.--> 
                        <div>
                     		Your grade will be calculated with this scale:
                        </div>
                    	<!-- Grading scale example table.-->                                                                                                
                    </div><!-- .section1 -->                
                </div><!-- .example -->                     
            </section><!-- #grades -->            
        
        </div><!-- #document -->
    </div>

</div>

<div id="templates">
    <div class="description">
        <h3 class="editable">Heading</h3>
        <div class="editableHtml">
         	Text
        </div>
    </div>
</div><!-- #wrapper -->

<footer>    
    <nav>
        <ul>
            <li><a href="http://usu.edu">Utah State University</a></li>
            <li><a href="http://fact.usu.edu">FACT</a></li>
        </ul>
    </nav>
    <a class="home" href="./index.html">Syllabus Builder</a>
</footer>

<div id="preview_control"><a href="#close">close | x</a></div>
<div id="preview"></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
<script>window.jQuery.fn.dialog || document.write('<script src="js/libs/jquery-ui-1.8.21.min.js"><\/script>')</script>
<script src="js/libs/tiny_mce/jquery.tinymce.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

</body>
</html>