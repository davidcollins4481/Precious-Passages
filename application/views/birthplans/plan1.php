<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Birth Plans")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>
        <!-- unique -->
        <div id="content">
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            <div id="mainbar" class="birthplan">
                <h1><a name="intro" id="intro"></a> Sample Plan 1</h1>

                <p><span style="font-family: Arial; color: windowtext">This Birth Plan comes from</span> <span style="font-family: Arial"><a style="color: #324094; font-weight: normal; font-style: normal; text-decoration: none; text-underline: none; text-line-through: none" href=
                "http://sheknows.com/inside/look/241.htm">http://sheknows.com/inside/look/241.htm</a></span> <b><span style="font-family: Arial; color: windowtext">.&#160;</span></b> <span style="font-family: Arial; color: windowtext">This is just one of several online interactive birth
                plans.&#160;</span></p>

                <p><b><span style="font-family: Arial; color: windowtext">Birth plan creator</span></b></p>

                <p><b><span style="font-family: Arial; color: windowtext">Summarizing your birth preferences is easy with our interactive checklist! Simply fill in the blanks at the top of the plan below, then check the items you would like to see printed on your birth plan.&#160; Feel free to add any
                additional items you deem important.</span></b></p>

                <p>&#160;</p>

                <p><b><span style="font-family: Arial; color: windowtext">A few important notes</span></b><span style="font-family: Arial; color: windowtext"><br />
                The reason for creating a birth plan is so that everyone understands your hopes and desires for labor and birth. It is a great place to begin discussions with your caregiver(s). This is <i>not</i> a contract, but a statement of your preferences. (<a style=
                "color: #324094; font-weight: normal; font-style: normal; text-decoration: none; text-underline: none; text-line-through: none" href="http://PregnancyAndBaby.com/inside/look/26.htm"><span style="color: windowtext">Click here</span></a> for a great article about birth plans.)</span></p>

                <p><span style="font-family: Arial; color: windowtext">Birth plans are best kept short and to the point -- lots of details may be lost on medical support staff. You may wish to create two plans: one for you and your support team (coach, doula, etc.) and another, more concise document (about
                a page long) for your caregiver and the hospital/birth center staff.</span></p>

                <p><span style="font-family: Arial; color: windowtext">It is <i>very important</i> that you talk about the procedures and/or choices that appear your plan with your caregiver(s). Not only do obstetric practices often vary by caregiver, hospital, state and country, there are often important
                factors involved. It is your responsibility to evaluate and understand each choice you make.</span></p>

                <p><b><span style="font-family: Arial; color: windowtext">Instructions:</span></b><span style="font-family: Arial; color: windowtext">On the plan below, all section headings are checked by default. If you do not select any of the options underneath a particular heading (and keep the blank
                boxes clear), uncheck the heading box in order to avoid having a spare heading with no additional text.</span></p>

                <p><span style="font-family: Arial; color: windowtext">When you&#39;re done, press the &quot;create&quot; button at the end of the page! Save the finished plan to your hard drive as a .htm or .html file or print it out.</span></p>
                <form method="post" action="/birthplans/samplePlanOnePost">
                    <table class="MsoNormalTable" border="0" cellpadding="0" width="100%" style="width: 100.0%" id="table1">
                        <tr>
                            <td valign="top" style="padding: .75pt">
                                <p class="MsoNormal"><b>
                                <span style="font-family: Arial">Birth plan title:</span></b>
                                <span style="font-family: Arial"><br />
                                <input type="radio" name="title" value="Birth Plan" />Birth Plan<br />
                                <input type="radio" name="title" value="Our wishes for Childbirth" />Our wishes for Childbirth<br />
                                <input type="radio" name="title" value="My wishes for Childbirth" />My wishes for Childbirth<br />
                                <input type="radio" name="title" value="Birth Preferences" />Birth Preferences<br />
                                <input type="radio" name="title" value="Preferences for Labor and Birth" />Preferences for Labor and Birth<br />
                                <input type="radio" name="title" value="Our Birth Choices" />Our Birth Choices</span></p>
                            </td>
                            <!--
                            <td valign="top" style="padding: .75pt">
                                <p class="MsoNormal"><b>
                                <span style="font-family: Arial">Font face:</span></b><span style="font-family: Arial"><br />
                                <input type="radio" name="fontface1" value="" />Times New Roman<br />
                                <input type="radio" name="fontface2" value="V1" />Arial, Helvetica<br />
                                <input type="radio" name="fontface3" value="V1" />Verdana<br />
                                <input type="radio" name="fontface" value="V1" />Trebuchet MS</span></p>
                            </td>
                            -->
                        </tr>

                        <tr>
                            <td style="padding: .75pt">
                                <p class="MsoNormal"><b><span style="font-family: Arial">Your full name:&#160;</span></b></p>
                            </td>

                            <td style="padding: .75pt">
                                <p class="MsoNormal"><span style="font-family: Arial"><input type="text" size="30" name="name" /></span></p>
                            </td>
                        </tr>

                        <tr>
                            <td valign="top" style="padding: .75pt">
                                <p class="MsoNormal"><b><span style="font-family: Arial">name of your caregiver:</span></b></p>
                            </td>

                            <td valign="top" style="padding: .75pt">
                                <p class="MsoNormal"><span style="font-family: Arial"><input type="text" size="30" name="caregiver" /></span></p>
                            </td>
                        </tr>

                        <tr>
                            <td valign="top" style="padding: .75pt">
                                <p class="MsoNormal"><b><span style="font-family: Arial">name of Hospital/Birth Center:&#160;</span></b></p>
                            </td>

                            <td valign="top" style="padding: .75pt">
                                <p class="MsoNormal"><span style="font-family: Arial"><input type="text" size="30" name="hosp" /></span></p>
                            </td>
                        </tr>

                        <tr>
                            <td valign="top" style="padding: .75pt">
                                <p class="MsoNormal"><b><span style="font-family: Arial">Due date:&#160;</span></b></p>
                            </td>

                            <td valign="top" style="padding: .75pt">
                                <p class="MsoNormal"><span style="font-family: Arial"><input type="text" size="30" name="due" /></span></p>
                            </td>
                        </tr>

                        <tr>
                            <td valign="top" style="padding: .75pt">
                                <p class="MsoNormal"><b><span style="font-family: Arial">Coach/main support</span></b> <span style="font-family: Arial">(i.e. my husband, my coach, James, my mother):&#160;</span></p>
                            </td>

                            <td valign="top" style="padding: .75pt">
                                <p class="MsoNormal"><span style="font-family: Arial"><input type="text" size="30" name="support" /></span></p>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: .75pt">
                                <p class="MsoNormal"><b><span style="font-family: Arial">How do you want the plan to refer to your baby?</span></b> <span style="font-family: Arial">(our baby, my daughter, the babies)</span></p>
                            </td>

                            <td style="padding: .75pt">
                                <p class="MsoNormal"><span style="font-family: Arial"><input type="text" size="30" name="baby" /></span></p>
                            </td>
                        </tr>
                    </table>

                    <div style="mso-element: para-border-div; mso-border-top-alt: solid windowtext .75pt; border-left: medium none; border-right: medium none; border-top: 1.0pt solid windowtext; border-bottom: medium none; padding-left: 0in; padding-right: 0in; padding-top: 1.0pt; padding-bottom: 0in">
                        <p class="MsoNormal" align="center" style="text-align: center; border: medium none; padding: 0in"><span style="font-family: Arial">&#160;</span></p>

                        <p class="MsoNormal" style="border: medium none; padding: 0in"><span style="font-family: Arial">DATE</span></p>

                        <p class="MsoNormal" style="border: medium none; padding: 0in"><span style="font-family: Arial">Dear _________________________ ,</span></p>

                        <p class="MsoNormal" align="center" style="text-align: center; border: medium none; padding: 0in"><span style="font-family: Arial">We are looking forward to sharing our birth experience with you. We have created this birth plan in order to outline some of our preferences for birth. We
                        would appreciate you reviewing this plan, and would be happy to do so with you. We understand that there may be situations in which our choices may not be possible, but we hope that you will help us to move toward our goals as much as possible and to make this labor and birth a great
                        experience. We do not want to replace the medical personnel, but instead want to be informed of any procedures in advance, and to be allowed the chance to give informed consent. Please feel free to ask if you have any questions or comments. Thank you!</span></p>

                        <p class="MsoNormal" align="center" style="text-align: center; border: medium none; padding: 0in"><span style="font-family: Arial">&#160;</span></p>
                    </div>

                    <p><span style="font-family: Arial; color: windowtext">
                    <b>Please Note</b><br />
                    <input type="checkbox" name="special1" value="yes" />I have tested positive for <a style="color: #324094; font-weight: normal; font-style: normal; text-decoration: none; text-underline: none; text-line-through: none" href="http://sheknows.com/inside/look/422.htm"><span style=
                    "color: windowtext">Group B Strep</span></a>.<br />
                    <input type="checkbox" name="special2" value="yes" />My bloodtype is Rh- (Rhesus Negative).<br />
                    <input type="checkbox" name="special6" value="yes" />I have gestational diabetes.<br />
                    <input type="checkbox" name="special7" value="yes" />I am diabetic.<br />
                    <input type="checkbox" name="special3" value="yes" />I am hard of hearing.<br />
                    <input type="checkbox" name="special4" value="yes" />My vision is impaired.<br />
                    <input type="checkbox" name="special5" value="yes" />I would like to wear contact lenses or glasses at all times when conscious.<br />
                    <br />
                    &#160;</span></p>

                    <div style="mso-element: para-border-div; mso-border-top-alt: solid windowtext .75pt; border-left: medium none; border-right: medium none; border-top: 1.0pt solid windowtext; border-bottom: medium none; padding-left: 0in; padding-right: 0in; padding-top: 1.0pt; padding-bottom: 0in">
                        <p class="MsoNormal" style="border: medium none; padding: 0in"><span style="font-family: Arial"><br />
                        <b>Labor</b> (<a style="color: #324094; font-weight: normal; font-style: normal; text-decoration: none; text-underline: none; text-line-through: none" href="http://sheknows.com/inside/Pregnancy/Birth/"><span style=
                        "color: windowtext">Click here</span></a> for articles about labor and birth)<br />
                        <input type="checkbox" name="labor1" value="yes" />Please perform no routine prepatory tasks (shaving, enema, etc.), unless requested.<br />
                        <input type="checkbox" name="labor2" value="yes" />I would like to have an enema upon admission to the hospital.<br />
                        <input type="checkbox" name="labor3" value="yes" />I expect that doctors and hospital staff will discuss all procedures with me before they are performed.<br />
                        <input type="checkbox" name="labor4" value="yes" />I would like to be free to walk, change positions and use the bathroom as needed or desired.<br />
                        <input type="checkbox" name="labor5" value="yes" />I prefer to wear my own clothes, rather than a hospital gown.<br />
                        <input type="checkbox" name="labor6" value="yes" />I prefer to eat and drink throughout labor, as desired.<br />
                        <input type="checkbox" name="labor7" value="yes" />I will remain hydrated by drinking moderate amounts of fluids (water, juice, ice chips).<br />
                        <input type="checkbox" name="labor8" value="yes" />So I can stay as mobile as possible, I would prefer to have a heparin lock adminstered instead of an IV.<br />
                        <input type="checkbox" name="labor9" value="yes" />Please do not administer an IV or heparin lock unless there is a clear medical indication that such is necessary.<br />
                        <input type="checkbox" name="labor10" value="yes" />I would like a quiet, soothing environment during labor, with dim lights and minimal interruptions.<br />
                        <input type="checkbox" name="labor11" value="yes" />I would like to play my own music.<br />
                        <input type="checkbox" name="labor12" value="yes" />Please limit the number of vaginal exams.<br />
                        <input type="checkbox" name="labor13" value="yes" />I wish to labor freely in the birthing tub or shower.<br />
                        <input type="checkbox" name="labor14" value="yes" />As long as the baby is doing well, I prefer that fetal heart tones be monitored intermittently with an external monitor or doppler, even if the membranes have ruptured.<br />
                        <input type="checkbox" name="labor15" value="yes" />If fetal distress is suspected and time permits, I would like confirmation of this with a fetal scalp blood sample before proceeding with other interventions.<br />
                        <input type="checkbox" name="labor16" value="yes" />Please allow me to vocalize as desired during labor and birth without comment or criticism.<br />
                        <input type="checkbox" name="labor17" value="yes" />I do not mind observation by students, interns or staff.<br />
                        <input type="checkbox" name="labor18" value="yes" />Please do not permit observers such as interns, students or unnecessary staff into the room without my permission.<br />
                        <input type="checkbox" name="labor19" value="yes" />To preserve my privacy and dignity, I would prefer that everyone knock before entering.<br />
                        <br />
                        &#160;</span></p>
                    </div>

                    <div class="MsoNormal" align="center" style="text-align: center">
                        <hr size="1" width="80%" align="center" />
                    </div>

                    <p class="MsoNormal"><span style="font-family: Arial">
                    <b>Labor Induction/Augmentation</b><br />
                    <input type="checkbox" name="induction1" value="yes" />I would like to avoid <a style="color: #324094; font-weight: normal; font-style: normal; text-decoration: none; text-underline: none; text-line-through: none" href=
                    "http://sheknows.com/inside/Pregnancy/Birth/Labor_Induction/"><span style="color: windowtext">induction</span></a> unless it is medically necessary.<br />
                    <input type="checkbox" name="induction2" value="yes" />As long as the baby and I are healthy, I do not want to discuss induction prior to 42 weeks.<br />
                    <input type="checkbox" name="induction3" value="yes" />If my pregnancy progresses past 40 weeks, I would prefer to base the decision to induce on the results of the baby&#39;s biophysical profiles, not on my own personal discomfort or impatience.<br />
                    <input type="checkbox" name="induction4" value="yes" />I would like to try alternative means of labor augmentation, like walking or nipple stimulation, before pitocin or artificial rupture of membranes is attempted.<br />
                    <input type="checkbox" name="induction5" value="yes" />If induction is necessary, I would like to attempt it with prostaglandin gel or another means before pitocin is administered.<br />
                    <input type="checkbox" name="induction6" value="yes" />If induction is attempted, but fails, I would like to come back at another time rather than pursue further intervention (assuming my membranes are intact and that waiting presents no danger to the baby or myself).<br />
                    <input type="checkbox" name="induction7" value="yes" />Please do not rupture my membranes artificially unless medically indicated.<br />
                    <br />
                    &#160;</span></p>

                    <div class="MsoNormal" align="center" style="text-align: center">
                        <hr size="1" width="80%" align="center" />
                    </div>

                    <p class="MsoNormal"><b><span style="font-family: Arial">Anesthesia/Pain Medication</span></b> <span style="font-family: Arial"><br />
                    <input type="checkbox" name="anes1" value="yes" />Please do not offer anesthesia/analgesia unless I ask for it.<br />
                    <input type="checkbox" name="anes2" value="yes" />If I ask for pain relief, please feel free to offer nonmedical choices for coping and/or remind me how close I am to the birth.<br />
                    <input type="checkbox" name="anes3" value="yes" />I would like to avoid all narcotics, if possible.<br />
                    <input type="checkbox" name="anes4" value="yes" />I prefer an epidural to narcotic pain medication.<br />
                    <input type="checkbox" name="anes5" value="yes" />If pain relief is considered, I would like to try a narcotic before an epidural.<br />
                    <input type="checkbox" name="anes6" value="yes" />I would like to try having narcotics-only administered in the epidural line before progressing to full anesthesia.<br />
                    <input type="checkbox" name="anes7" value="yes" />I would like to have an epidural as soon as permissable.<br />
                    <input type="checkbox" name="anes8" value="yes" />I would like to have the epidural catheter placed upon my admission to the hospital.<br />
                    <input type="checkbox" name="anes9" value="yes" />I would like to have a light dose (walking) epidural.<br />
                    <input type="checkbox" name="anes10" value="yes" />I would like the epidural to wear off slightly as I approach full dilation and the pushing stage.<br />
                    <br />
                    &#160;</span></p>

                    <div style="mso-element: para-border-div; mso-border-top-alt: solid windowtext .75pt; border-left: medium none; border-right: medium none; border-top: 1.0pt solid windowtext; border-bottom: medium none; padding-left: 0in; padding-right: 0in; padding-top: 1.0pt; padding-bottom: 0in">
                        <p class="MsoNormal" style="border: medium none; padding: 0in"><span style="font-family: Arial"><br />
                        <b>Cesarean Section Delivery</b><br />
                        <input type="checkbox" name="cesarean1" value="yes" />I feel very strongly that I would like to avoid a cesarean delivery<br />
                        <input type="checkbox" name="cesarean2" value="yes" />If a cesarean is necessary, I expect to be fully informed of all procedures and actively participate in decision-making.<br />
                        <input type="checkbox" name="cesarean3" value="yes" />I would like (coach) to be present during the surgery.<br />
                        <input type="checkbox" name="cesarean4" value="yes" />Please explain the surgery to me as it happens.<br />
                        <input type="checkbox" name="cesarean5" value="yes" />I would prefer general anesthesia in an emergency only.<br />
                        <input type="checkbox" name="cesarean6" value="yes" />I would prefer epidural anesthesia, if possible, in order to remain conscious through the delivery.<br />
                        <input type="checkbox" name="cesarean7" value="yes" />I would prefer spinal anesthesia for the procedure.<br />
                        <input type="checkbox" name="cesarean8" value="yes" />I would like to have a respectful atmosphere without chatter during any part of the surgical procedure.<br />
                        <input type="checkbox" name="cesarean9" value="yes" />If possible, please do not strap my arms to the table during the procedure.<br />
                        <input type="checkbox" name="cesarean10" value="yes" />If conditions permit, I would like to be the first to hold the baby after the delivery.<br />
                        <input type="checkbox" name="cesarean11" value="yes" />If possible, I would like to breastfeed the baby immediately after the birth.<br />
                        <input type="checkbox" name="cesarean12" value="yes" />If conditions permit, the baby should be given to (coach) immediately after the birth.<br />
                        <input type="checkbox" name="cesarean13" value="yes" />I would like our plans outlined here for after the birth to be followed as closely as possible.<br />
                        <input type="checkbox" name="cesarean14" value="yes" />Please lower the screen just before delivery so I may see the birth of the baby<br />
                        <br />
                        &#160;</span></p>

                        <p class="MsoNormal" style="border: medium none; padding: 0in"><span style="font-family: Arial">&#160;</span></p>
                    </div>

                    <p class="MsoNormal"><span style="font-family: Arial">
                    <b>Perineal Care</b><br />
                    <input type="checkbox" name="peri1" value="yes" />I prefer not to have an episiotomy unless it is medically indicated.<br />
                    <input type="checkbox" name="peri2" value="yes" />To avoid episiotomy or tearing, (coach) or my labor assistant will perform perineal massage with oil and apply hot compresses.<br />
                    <input type="checkbox" name="peri3" value="yes" />To help my perineum stretch, please help guide my pushing efforts by letting me know when to push and when to stop.<br />
                    <input type="checkbox" name="peri4" value="yes" />I would rather tear than have an episiotomy.<br />
                    <input type="checkbox" name="peri5" value="yes" />I would rather have an episiotomy than risk a tear.<br />
                    <input type="checkbox" name="peri6" value="yes" />Please administer local anesthesia when repairing any episiotomy or tear(s).<br />
                    <input type="checkbox" name="peri7" value="yes" />Please suture tears only if necessary.<br />
                    <br />
                    &#160;</span></p>

                    <div class="MsoNormal" align="center" style="text-align: center">
                        <hr size="1" width="80%" align="center" />
                    </div>

                    <p class="MsoNormal"><span style="font-family: Arial"><br />
                    <b>Delivery</b><br />
                    <input type="checkbox" name="delivery1" value="yes" />Even if I am fully dilated, and assuming the baby is not in distress, I would like to wait until I feel the urge to push before beginning the pushing phase.<br />
                    <input type="checkbox" name="delivery2" value="yes" />I prefer to push or not push according to my instincts and would prefer not to have guidance or coaching in this effort.<br />
                    <input type="checkbox" name="delivery3" value="yes" />I do not want to use stirrups while pushing.<br />
                    <input type="checkbox" name="delivery4" value="yes" />I would like the freedom to push and deliver in any position I like.<br />
                    <input type="checkbox" name="delivery5" value="yes" />I would appreciate help from (coach) and staff supporting my legs as I push.<br />
                    <input type="checkbox" name="delivery6" value="yes" />I would like to deliver in a birthing pool and have made arrangements to rent one for the birth.<br />
                    <input type="checkbox" name="delivery7" value="yes" />I would like to have a mirror available and adjusted so I can see the baby&#39;s head crowning.<br />
                    <input type="checkbox" name="delivery8" value="yes" />I would like the opportunity to touch my baby&#39;s head as it crowns.<br />
                    <input type="checkbox" name="delivery9" value="yes" />I would like a soothing environment during the actual birth, with dim lights and quiet voices.<br />
                    <input type="checkbox" name="delivery10" value="yes" />I would like (coach) to help catch the baby.<br />
                    <input type="checkbox" name="delivery11" value="yes" />I would like (other) to help catch the baby.<br />
                    <input type="checkbox" name="delivery12" value="yes" />I would like to help catch the baby.<br />
                    <input type="checkbox" name="delivery13" value="yes" />I would like to have the birth recorded with photographs, video tape and/or tape recording.<br />
                    &#160;</span></p>

                    <div class="MsoNormal" align="center" style="text-align: center">
                        <hr size="1" width="80%" align="center" />
                    </div>

                    <p class="MsoNormal"><span style="font-family: Arial"><br />
                    <b>After birth</b><br />
                    <input type="checkbox" name="after1" value="yes" />Please place the baby on my stomach/chest immediately after delivery.<br />
                    <input type="checkbox" name="after2" value="yes" />I would like to breastfeed the baby immediately.<br />
                    <input type="checkbox" name="after3" value="yes" />(coach) would like the option to cut the cord.<br />
                    <input type="checkbox" name="after4" value="yes" />(other) would like the option to cut the cord.<br />
                    <input type="checkbox" name="after5" value="yes" />I would like the option to cut the cord.<br />
                    <input type="checkbox" name="after6" value="yes" />Please allow the umbilical cord to stop pulsating before it is cut.<br />
                    <input type="checkbox" name="after7" value="yes" />I have made arrangements for donation of the umbilical cord blood.<br />
                    <input type="checkbox" name="after8" value="yes" />I have made arrangements to bank the umbilical cord blood.<br />
                    <input type="checkbox" name="after9" value="yes" />I prefer to wait for spontaneous delivery of the placenta and do not want a routine injection of pitocin.<br />
                    <input type="checkbox" name="after10" value="yes" />Please show me the placenta after it is delivered.<br />
                    <input type="checkbox" name="after11" value="yes" />Please remove my IV/Heparin lock/catheter as soon as possible after delivery.<br />
                    &#160;</span></p>

                    <div class="MsoNormal" align="center" style="text-align: center">
                        <hr size="1" width="80%" align="center" />
                    </div>

                    <p class="MsoNormal"><span style="font-family: Arial"><br />
                    <b>Newborn Care</b><br />
                    <input type="checkbox" name="newborn1" value="yes" />I would like to hold the baby skin-to-skin during the first hours to help regulate baby&#39;s body temperature.<br />
                    <input type="checkbox" name="newborn2" value="yes" />I would like to hold the baby through delivery of the placenta and any repair procedures.<br />
                    <input type="checkbox" name="newborn3" value="yes" />Please evaluate and bathe the baby at my bedside.<br />
                    <input type="checkbox" name="newborn4" value="yes" />If possible, please evaluate the baby on my abdomen.<br />
                    <input type="checkbox" name="newborn5" value="yes" />If the baby must go to the nursery for evaluation or medical treatment, (coach), or someone I designate, will accompany the baby at all times.<br />
                    <input type="checkbox" name="newborn6" value="yes" />I would prefer to bathe the baby myself, at my discretion.<br />
                    <input type="checkbox" name="newborn7" value="yes" />Please delay eye medication for the baby until we are well past the initial bonding period (a couple hours after the birth).<br />
                    <input type="checkbox" name="newborn9" value="yes" />If available, would prefer erythromycin eye treatment or other antibiotic eye drops instead of silver nitrate.<br />
                    <input type="checkbox" name="newborn8" value="yes" />I would like to waive the administration of eye antibiotics.<br />
                    <input type="checkbox" name="newborn10" value="yes" />I would prefer to have Vitamin K administered orally.<br />
                    <input type="checkbox" name="newborn11" value="yes" />I would like to waive the administration of routine Vitamin K, unless medically indicated.<br />
                    <input type="checkbox" name="newborn12" value="yes" />I would like to defer the PKU screening.<br />
                    <input type="checkbox" name="newborn13" value="yes" />I would like to defer the following vaccinations:<br />
                    &#160;</span></p>

                    <div class="MsoNormal" align="center" style="text-align: center">
                        <hr size="1" width="80%" align="center" />
                    </div>

                    <p class="MsoNormal"><span style="font-family: Arial"><br />
                    <b>Postpartum</b> (<a style="color: #324094; font-weight: normal; font-style: normal; text-decoration: none; text-underline: none; text-line-through: none" href=
                    "http://sheknows.com/inside/Pregnancy/Postpartum/"><span style="color: windowtext">Click here</span></a> for postpartum features)<br />
                    <input type="checkbox" name="post1" value="yes" />I would prefer not to be catheterized until I&#39;ve had some private time to attempt urination on my own.<br />
                    <input type="checkbox" name="post2" value="yes" />If available, I would prefer a private room.<br />
                    <input type="checkbox" name="post3" value="yes" />I would like to have the baby room-in with me at all times.<br />
                    <input type="checkbox" name="post4" value="yes" />Once I&#39;ve had time to recover, I would like the baby to room-in with me.<br />
                    <input type="checkbox" name="post5" value="yes" />I would like the baby to room-in with me during the day, but stay in the nursery at night.<br />
                    <input type="checkbox" name="post6" value="yes" />I would like the baby in the nursery at night, but brought to me for breastfeeding on demand.<br />
                    <input type="checkbox" name="post7" value="yes" />I would like the baby in the nursery and brought to me on request and for breastfeeding.<br />
                    <input type="checkbox" name="post8" value="yes" />I would like my (coach) to room-in with me.<br />
                    <input type="checkbox" name="post9" value="yes" />I would like (other) to room-in with me.<br />
                    <input type="checkbox" name="post10" value="yes" />I would like my other children to have free visitation access.<br />
                    <input type="checkbox" name="post11" value="yes" />Assuming I feel up to it and the baby is healthy, I would like to be released from the hospital as soon as possible following the birth.<br />
                    <input type="checkbox" name="post12" value="yes" />I would like permission for access to my chart and the baby&#39;s chart.<br />
                    <br />
                    &#160;</span></p>

                    <div class="MsoNormal" align="center" style="text-align: center">
                        <hr size="1" width="80%" align="center" />
                    </div>

                    <p class="MsoNormal"><span style="font-family: Arial"><br />
                    <b>Breastfeeding</b> (<a style="color: #324094; font-weight: normal; font-style: normal; text-decoration: none; text-underline: none; text-line-through: none" href=
                    "http://sheknows.com/inside/Baby/Breastfeeding/"><span style="color: windowtext">Click here</span></a> for information about breastfeeding)<br />
                    <input type="checkbox" name="bfing1" value="yes" />I plan to breastfeed and want to nurse immediately following the birth.<br />
                    <input type="checkbox" name="bfing2" value="yes" />Please do not give the baby supplements (including formula, glucose, or plain water) without my consent, unless there is an urgent medical necessity.<br />
                    <input type="checkbox" name="bfing3" value="yes" />Unless I am unable to give my consent, please do not give the baby any supplements without first informing me of the reason(s) and seeking my consent.<br />
                    <input type="checkbox" name="bfing4" value="yes" />Please do not give the baby a pacifier.<br />
                    <input type="checkbox" name="bfing5" value="yes" />I would like to know more about breastfeeding.<br />
                    <input type="checkbox" name="bfing6" value="yes" />I would like to meet with the staff lactation consultant.<br />
                    <input type="checkbox" name="bfing7" value="yes" />I do not plan to breastfeed.<br />
                    &#160;</span></p>

                    <div class="MsoNormal" align="center" style="text-align: center">
                        <hr size="1" width="80%" align="center" />
                    </div>

                    <p class="MsoNormal"><span style="font-family: Arial"><br />
                    <b>Additional notes</b><br />
                    <input type="checkbox" name="other1" value="yes" />I would like to take still photographs during labor and the birth.<br />
                    <input type="checkbox" name="other2" value="yes" />I would like to make a videorecording of labor and/or the birth.<br />
                    <input type="checkbox" name="circ1" value="yes" />I am not planning to have the baby circumcised.<br />
                    <input type="checkbox" name="circ2" value="yes" />I am planning for the baby to be circumcised before we check out of the hospital. (Note: Do not waive Vitamin K shot in this event)<br />
                    <br />
                    &#160;</span></p>

                    <p class="MsoNormal" align="center" style="text-align: center"><span style="font-family: Arial">
                    <input type="submit" value="Create this birth plan" />
                </form>
                </span></p>
            </div>
        </div>
        <!-- /unique -->
<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
