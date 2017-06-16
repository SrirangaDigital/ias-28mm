<script type="text/javascript">
$(document).ready(function() {

    var mTop = $('.navbar').height() - 10;
    $('#grid').css('margin-top', mTop + 'px');
    $('.schedule-text').hide();

    var hloc = window.location.href;

    var tab = 'day1';
    var vLoc = 'grid';
    var args = ["", ""];

    if(hloc.match(/\?/)){

      args = hloc.split(/\?/)[1].split(",");

      tab = args[0];
    }

    $('#' + tab).show(function(){

        $('a[href="#' + tab + '"').parent().addClass('active');

        var vLocTop = 0;        

        if(!(args[1] == "")) {

          vLoc = args[1];
          vLocTop = $('#' + vLoc).offset().top - $(".navbar").outerHeight();
        }     

        $("html, body").animate({scrollTop: vLocTop}, 1);
    });

    $('.schedule .nav li a').on('click', function(event){

        event.preventDefault();
        tab = $(this).attr('href');
    

        $('.schedule-text').hide();

        $(tab).show(function(){

            window.location.hash = tab;
            $("html, body").animate({scrollTop: 0}, 1);
        });
        $('.schedule .nav li').removeClass('active');
        $(this).parent().addClass('active');
    });
});
</script>

<div class="container">
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <p>&nbsp;</p>    
        </div>
    </div>
</div>
<div id="grid" class="container gap-above">
    <div class="row">
        <div class="col-md-9 main">
            <h1>Programme Schedule</h1>
            <div class="schedule">
                <ul class="nav nav-justified">
                    <li><a href="#day1">Day 1</a></li>
                    <li><a href="#day2">Day 2</a></li>
                    <li><a href="#allied">Allied Events</a></li>
                </ul>
                <div class="schedule-text" id="day1">
                    <h3>30 June 2017 (Friday)</h3>
                    <h5>Venue : Faculty Hall, Indian Institute of Science, Bengaluru</h5><br />
                    <span class="type" id="session1A">Session 1A - Special Lecture (0930 - 1010)</span><br />
                    <span class="chairperson">Chairperson: Madhav Gadgil, National Center for Cell Science, Pune</span><br />
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                0930 - 1010<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/K_Ullas_Karanth"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                               <span class="speaker">K. Ullas Karanth</span><br />
                               Wildlife Conservation Society, Bengaluru<br/ >
                               <span class="talk">Conservation Science at Macro-Ecological Scales</span>
                            </dd>
                        </dl>
                      </div>
                      <br /><span class="type" id="session1B">Session 1B  - Inaugural Lectures of Fellows (1010 - 1055)</span><br />
                      <span class="chairperson">Chairperson: H S Mani, Chennai Mathematical Institute, Chennai</span>
                      <br />
                    <div class="session">
                        <dl class="dl-horizontal">
                          <dt>
                            1010 - 1030<br />
                            <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/V_Subramanian"><i class="fa fa-info-circle"></i></a></div>
                          </dt>
                          <dd>
                            <span class="speaker">V. Subramanian</span><br />
                            CLRI, Chennai<br/ >
                            <span class="talk">Exploring the Changes in the Structure of α-Helical Peptides Adsorbed onto Carbon and Boron Nitride-Based Nanomaterials.</span>
                          </dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>
                            1035 - 1055<br />
                              <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Sumathi_Rao"><i class="fa fa-info-circle"></i></a></div>
                          </dt>
                          <dd>
                            <span class="speaker">Sumathi Rao</span><br />
                            HRI, Allahabad<br/ >
                            <span class="talk">Topological Phases of Quantum Matter.</span>
                          </dd>
                        </dl><br />
                        <div class="break">
                          <dl class="dl-horizontal">
                            <dt>
                              1100 - 1120
                            </dt>
                            <dd>Tea break</dd>
                          </dl>
                        </div>
                      <br /><span class="type" id="session1C">Session 1C  - Inaugural Lectures of Fellows / Associates(1120-1300)</span><br />
                      <span class="chairperson">Chairperson: Saumitra Das, Indian Institute of Science, Bengaluru</span>  
                      <br />                        
                        <dl class="dl-horizontal">
                          <dt>
                            1120 - 1140<br />
                            <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Debabrata_Dash"><i class="fa fa-info-circle"></i></a></div>
                          </dt>
                          <dd>
                            <span class="speaker">Debabrata Dash</span><br />
                            BHU, Varanasi<br/ >
                            <span class="talk">Killing Thrombus with Nano-Bullets.</span>
                          </dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>
                            1145 - 1205<br />
                            <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Suman_K_Dhar"><i class="fa fa-info-circle"></i></a></div>
                          </dt>
                          <dd>
                            <span class="speaker">Suman K. Dhar</span><br />
                            JNU, New Delhi<br/ >
                            <span class="talk">DNA Replication in Pathogens: Unique Properties and Possible Intervention.</span>
                          </dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>
                            1210 - 1230<br />
                            <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Arvind_Ayyer"><i class="fa fa-info-circle"></i></a></div>
                          </dt>
                          <dd>
                            <span class="speaker">Arvind Ayyer</span><br />
                            IISc, Bengaluru<br/ >
                            <span class="talk">The Asymmetric Simple Exclusion Process: An Exactly Solvable Model of Particle Transport.</span>
                          </dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>
                            1235 - 1255<br />
                            <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Pallab_Dasgupta"><i class="fa fa-info-circle"></i></a></div>
                          </dt>
                          <dd>
                            <span class="speaker">Pallab Dasgupta</span><br />
                            IIT, Kharagpur<br/ >
                            <span class="talk">The Science of Formal Safety Assurance of Embedded Electronic Systems.</span>
                          </dd>
                        </dl>
                    </div>
                    <div class="break">
                      <dl class="dl-horizontal">
                        <dt>
                          1300 - 1430
                        </dt>
                        <dd>Lunch break</dd>
                        </dl>
                    </div>
                    <div class="session">
                      <span class="type" id="session1D">Session 1D – Inaugural Lectures of Fellows / Associates (1430 - 1540)</span><br />
                      <span class="chairperson">Chairperson: Mewa Singh, University of Mysore, Mysore</span>
                      <br />
                      <dl class="dl-horizontal">
                        <dt>
                          1430 - 1450<br />
                          <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Raghavan_Krishnan"><i class="fa fa-info-circle"></i></a></div>
                        </dt>
                        <dd>
                          <span class="speaker">Raghavan Krishnan</span><br />
                          IITM, Pune<br/ >
                          <span class="talk">Understanding the South Asian Monsoon Response to Greenhouse Gas (GHG) and Aerosol Forcing</span>
                        </dd>
                      </dl>
                      <dl class="dl-horizontal">
                        <dt>
                          1455 - 1515<br />
                          <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Amitava_Patra"><i class="fa fa-info-circle"></i></a></div>
                        </dt>
                        <dd>
                          <span class="speaker">Amitava Patra</span><br />
                          IACS, Kolkata<br/ >
                          <span class="talk">Nanomaterials-Based Light-Harvesting Systems for Potential Applications.</span>
                        </dd>
                      </dl>
                        <dl class="dl-horizontal">
                          <dt>
                            1520 - 1540<br />
                            <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Ranjit_Thapa"><i class="fa fa-info-circle"></i></a></div>
                          </dt>
                          <dd>
                            <span class="speaker">Ranjit Thapa</span><br />
                            SRM University, Kattankulathur<br/ >
                            <span class="talk">Descriptor and Indicator for sp<sup>2</sup>-Hybridized Carbon-Based Catalysts.</span>
                          </dd>
                        </dl><br />
                        <div class="break">
                          <dl class="dl-horizontal">
                            <dt>
                              1545 - 1605
                            </dt>
                            <dd>Tea break</dd>
                          </dl>
                        </div><br/ >
                        <br /><span class="type" id="session1E">Session 1E  - Inaugural Lectures of Fellows (1605-1720)</span><br />
                        <span class="chairperson">Chairperson: G Krishnamoorthy, Anna University, Chennai</span>
                        <br />                        
                        <dl class="dl-horizontal">
                          <dt>
                            1605 - 1625<br />
                            <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Siva_R_Athreya"><i class="fa fa-info-circle"></i></a></div>
                          </dt>
                          <dd>
                            <span class="speaker">Siva R. Athreya</span><br />
                            ISI, Bengaluru<br/ >
                            <span class="talk">Dense Graph Limits under Respondent-Driven Sampling.</span>
                          </dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>
                            1630 - 1650<br />
                            <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Mitali_Chatterjee"><i class="fa fa-info-circle"></i></a></div>
                          </dt>
                          <dd>
                            <span class="speaker">Mitali Chatterjee</span><br />
                            IPGMER, Kolkata<br/ >
                            <span class="talk">Post-Kala-Azar Dermal Leishmaniasis: In Vivo Veritas.</span>
                          </dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>
                            1655 - 1715<br />
                            <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Sagar_Sengupta"><i class="fa fa-info-circle"></i></a></div>
                          </dt>
                          <dd>
                            <span class="speaker">Sagar Sengupta</span><br />
                            NII, New Delhi<br/ >
                            <span class="talk">Understanding the Mechanisms that Prevent Carcinogenesis by Studying a Family of Caretaker Tumour Suppressors.</span>
                          </dd>
                        </dl>
                    </div>
                    <div class="session">
                      <span class="type" id="session1F">Session 1F – Public Lecture (1800 - 1900)</span><br />
                      <span class="chairperson">Chairperson: R Ramaswamy, Jawaharlal Nehru University, New Delhi</span><br />
                      <dl class="dl-horizontal">
                        <dt>
                          1800 - 1900<br />
                          <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/A_R_Venkatachalapathy"><i class="fa fa-info-circle"></i></a></div>
                        </dt>
                        <dd>
                          <span class="speaker">A.R. Venkatachalapathy</span><br />
                          Madras Institute of Developmental Studies, Chennai<br/ >
                          <span class="talk">Subramania Bharati: Nationalism and Creativity</span>
                        </dd>
                      </dl><br/>
                    </div>
                </div>
                <div class="schedule-text" id="day2">
                    <h3>1 July 2017 (Saturday)</h3>
                    <span class="type" id="session2A">
                      Session 2A - Special Lecture (0930–1010)
                    </span><br />
                    <span class="chairperson">
                      Chairperson: Namita Surolia, JNCASR, Bengaluru
                    </span>
                    <br />
                    <div class="session">
                      <dl class="dl-horizontal">
                        <dt>
                          0930 - 1010<br />
                          <div class="more-info">
                            <a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Gagandeep_Kang"><i class="fa fa-info-circle"></i>
                            </a>
                          </div>
                        </dt>
                        <dd>
                          <span class="speaker">Gagandeep Kang</span><br />
                          THSTI, Faridabad<br/ >
                          <span class="talk">Vaccines and Public Health in INDIA</span>
                        </dd>
                      </dl>
                    </div>
                    <br />
                    <span class="type" id="session2B">
                      Session 2B – Symposium on ‘Molecular Machines‘ : A multi-disciplinary Enterprise (1010 - 1300)
                    </span><br />
                    <span class="chairperson">
                      Convener: Debashish Chowdhury, Indian Institute of Technology, Kanpur
                    </span>
                    <br />
                    <div class="session">
                      <dl class="dl-horizontal">
                        <dt>
                          1010 - 1020<br />
                          <div class="more-info">
                            <a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Debashish_Chowdhury"><i class="fa fa-info-circle"></i>
                            </a>
                          </div>
                        </dt>
                        <dd>
                          <span class="speaker">Debashish Chowdhury</span><br />
                          IIT, Kanpur<br/ >
                          <span class="talk">Introduction</span>
                        </dd>
                      </dl><br />                      
                      <dl class="dl-horizontal">
                        <dt>
                          1020 - 1050<br />
                          <div class="more-info">
                            <a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Debashish_Chowdhury"><i class="fa fa-info-circle"></i>
                            </a>
                          </div>
                        </dt>
                        <dd>
                          <span class="speaker">Debashish Chowdhury</span><br />
                          IIT, Kanpur<br/ >
                          <span class="talk">Noise and Nonequilibrium in Nano-machine Operation: A Physics Perspective.</span>
                        </dd>
                      </dl><br />
                      <div class="break">
                        <dl class="dl-horizontal">
                          <dt>
                            1050 - 1110
                          </dt>
                          <dd>Tea break</dd>
                        </dl>
                      </div><br/ >
                      <dl class="dl-horizontal">
                        <dt>
                          1110 - 1140<br />
                          <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Roop_Mallik"><i class="fa fa-info-circle"></i></a></div>
                        </dt>
                        <dd>
                          <span class="speaker">Roop Mallik</span><br />
                          TIFR, Mumbai<br/ >
                          <span class="talk">Teamwork in Molecular Motors: A Cell Biology Perspective.</span>
                        </dd>
                      </dl>
                      <dl class="dl-horizontal">
                        <dt>
                          1140 - 1210<br />
                            <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Tanweer_Hussain"><i class="fa fa-info-circle"></i></a></div>
                        </dt>
                        <dd>
                          <span class="speaker">Tanweer Hussain</span><br />
                          IISc, Bengaluru<br/ >
                          <span class="talk">Understanding the Principles of Design of Molecular Machines: A Structural Biology Perspective.</span>
                        </dd>
                      </dl>
                      <dl class="dl-horizontal">
                        <dt>
                          1210 - 1240<br />
                          <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>Speakers/Pradyut_Ghosh"><i class="fa fa-info-circle"></i></a></div>
                        </dt>
                        <dd>
                          <span class="speaker">Pradyut Ghosh</span><br />
                          IASc, Bengaluru<br/ >
                          <span class="talk">Synthetic Small Molecules as Machines: A Chemistry Perspective.</span>
                        </dd>
                      </dl>
                      <div class="break">
                        <dl class="dl-horizontal">
                          <dt>
                            1300 - 1400
                          </dt>
                          <dd>Lunch break</dd>
                        </dl>
                      </div>
                    </div>              
                </div>
                <div class="schedule-text" id="allied">
                  <h3>Meetings</h3>
                  <h3>29 June 2017 (Thursday)</h3>
                  <div class="session">
                    <dl class="dl-horizontal">
                      <dt>
                        1000 - 1300<br />
                        <div class="more-info"><a target="_blank" title="" href="javascript:void()"></a></div>
                      </dt>
                      <dd>
                        <span class="speaker">Journal of Genetics Editorial Board Meeting</span><br />
                        Venue: Council room<br />
                      </dd>
                    </dl>
                    <dl class="dl-horizontal">
                      <dt>
                        1100 - 1300<br />
                        <div class="more-info"><a target="_blank" title="" href="javascript:void()"></a></div>
                      </dt>
                      <dd>
                        <span class="speaker">Science Education Panel : Symposium / Lectures for Invited teachers and SRFs</span><br />
                        Venue: Faculty Hall, IISc<br />
                      </dd>
                    </dl>
                    <dl class="dl-horizontal">
                      <dt>
                        1700 onwards<br />
                        <div class="more-info"><a target="_blank" title="" href="javascript:void()"></a></div>
                      </dt>
                      <dd>
                        <span class="speaker">Science Education Panel : Teachers' interactive meeting</span><br />
                        Venue: Academy auditorium<br />
                      </dd>
                    </dl>
                    <dl class="dl-horizontal">
                      <dt>
                        1600 - 1800<br />
                        <div class="more-info"><a target="_blank" title="" href="javascript:void()"></a></div>
                      </dt>
                      <dd>
                        <span class="speaker">Bulletin of Materials Science Editorial Board meeting</span><br />
                        Venue: Council Room<br />
                      </dd>
                    </dl>
                    <dl class="dl-horizontal">
                      <dt>
                        1800 onwards<br />
                        <div class="more-info"><a target="_blank" title="" href="javascript:void()"></a></div>
                      </dt>
                      <dd>
                        <span class="speaker">Joint Science Education Panel meeting</span><br />
                        Venue: Council Room<br />
                      </dd>
                    </dl>
                  </div>
                  <h3>01 July 2017 (Saturday)</h3>
                  <div class="session">
                    <dl class="dl-horizontal">
                      <dt>
                        1500<br />
                        <div class="more-info"><a target="_blank" title="" href="javascript:void()"></a></div>
                      </dt>
                      <dd>
                        <span class="speaker">Council Meeting</span><br />
                        Venue: Council Room<br />
                      </dd>
                    </dl>
                    <dl class="dl-horizontal">
                      <dt>
                        1500<br />
                        <div class="more-info"><a target="_blank" title="" href="javascript:void()"></a></div>
                      </dt>
                      <dd>
                        <span class="speaker">Journal of Astrophysics and Astronomy Editorial Board Meeting</span><br />
                        Venue: Lounge<br />
                      </dd>
                    </dl>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 sidebar">
<?php require_once('application/views/generalSidebar.php');?>
        </div>
    </div>
</div>
