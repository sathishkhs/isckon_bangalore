<style>


.timeline {
  position: relative;
}
/*.timeline::before {*/
/*  content: "";*/
/*  background: #C5CAE9;*/
/*  width: 5px;*/
/*  height: 95%;*/
/*  position: absolute;*/
/*  left: 50%;*/
/*  transform: translateX(-50%);*/
/*}*/

.timeline-item {
  width: 100%;
  margin-bottom: 70px;
}
.timeline-item:nth-child(even) .timeline-content {
  float: right;
  padding: 40px 30px 10px 30px;
}
.timeline-item:nth-child(even) .timeline-content .date {
  right: auto;
  left: 0;
}
.timeline-item:nth-child(even) .timeline-content::after {
  content: "";
  position: absolute;
  border-style: solid;
  width: 0;
  height: 0;
  top: 30px;
  left: -15px;
  border-width: 10px 15px 10px 0;
  border-color: transparent #f5f5f5 transparent transparent;
}
.timeline-item::after {
  content: "";
  display: block;
  clear: both;
}

.timeline-content {
  position: relative;
  width: 100%;
  padding: 10px 30px;
  border-radius: 4px;
  background: #f5f5f5;
  box-shadow: 0 20px 25px -15px rgba(0, 0, 0, 0.3);
}
.timeline-content::after {
  content: "";
  position: absolute;
  border-style: solid;
  width: 0;
  height: 0;
  top: 30px;
  right: -15px;
  border-width: 10px 0 10px 15px;
  border-color: transparent transparent transparent #f5f5f5;
}

.timeline-img {
  width: 30px;
  height: 30px;
  background: #3F51B5;
  border-radius: 50%;
  position: absolute;
  left: 50%;
  margin-top: 25px;
  margin-left: -15px;
}


.timeline-card {
  padding: 0 !important;
}
.timeline-card p {
  padding: 0 20px;
}
.timeline-card a {
  margin-left: 20px;
}

.timeline-item .timeline-img-header {
  background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)), url("https://picsum.photos/1000/800/?random") center center no-repeat;
  background-size: cover;
}

.timeline-img-header {
  height: 200px;
  position: relative;
  margin-bottom: 20px;
}
.timeline-img-header h2 {
  color: #FFFFFF;
  position: absolute;
  bottom: 5px;
  left: 20px;
}

blockquote {
  margin-top: 30px;
  color: #757575;
  border-left-color: #3F51B5;
  padding: 0 20px;
}
.timeline-head{
    background: #1a7d69;
    color: white!important;
    padding: 10px;
}

@media screen and (max-width: 768px) {
  .timeline::before {
    left: 50px;
  }
  .timeline .timeline-img {
    left: 50px;
  }
  .timeline .timeline-content {
    max-width: 100%;
    width: auto;
    margin-left: 70px;
  }
  .timeline .timeline-item:nth-child(even) .timeline-content {
    float: none;
  }
  .timeline .timeline-item:nth-child(odd) .timeline-content::after {
    content: "";
    position: absolute;
    border-style: solid;
    width: 0;
    height: 0;
    top: 30px;
    left: -15px;
    border-width: 10px 15px 10px 0;
    border-color: transparent #f5f5f5 transparent transparent;
  }
}

.card{
    height:100%;
}
.card-body{
    border-bottom: 1px solid #e8e5e0;
    padding: 10px 10px 10px 10px !important;
}
</style>
<section class="donate-now">
<section class="container mt-2">
    <div class="row">
        <div class="col-sm-12">
            <p class="text-center">
                Over a span of three months, IGF has been recognized for its achievements and excellence in the field of healthcare in India, by 4 eminent entities. These awards have been prominent milestones in IGF's journey towards #HealthyBharatHappyBharat and we hope to continue our winning streak. 
            </p>
        </div>
    </div>
    
</section>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-3">
            <div class="card p-2 border-0" style="width: 100%">
              <img src="assets/image/pics/ficci-award.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">FICCI Healthcare Excellence Awards 2022:</h5>
                <p class="card-text mt-2">Special Jury Recognition for 'Excellence in Capacity Building'</p>
              </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3">
            <div class="card p-2 border-0" style="width: 100%">
              <img src="assets/image/pics/mahatma-award.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mahatma Awards 2022:</h5>
                <p class="card-text mt-2">Social Good and Impact</p>
              </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3">
            <div class="card p-2 border-0" style="width: 100%">
              <img src="assets/image/pics/health-coms.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">PRmoment India:</h5>
                <p class="card-text mt-2">Best Social Campaign & CSR Award 2022 for our ANGEL - #ThankANurse Program, under the ‘GOLD’ category</p>
              </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3">
            <div class="card p-2 border-0" style="width: 100%">
              <img src="assets/image/pics/csr-award.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">CSR Health Awards 2022:</h5>
                <p class="card-text mt-2">Health CSR Project Award, under the 'Gold' category, conducted by IHW Council.</p>
              </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3">
            <div class="card p-2 border-0" style="width: 100%">
              <img src="assets/image/pics/iso-certificate.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ISO 9001:2015</h5>
                <p class="card-text mt-2">ISO Certificate</p>
              </div>
            </div>
        </div>
    </div>
</div>


<!--<section class="timeline">-->
<!--  <div class="container">-->
<!--      <div class="row">-->
<!--          <div class="col-sm-12 col-lg-6">-->
<!--              <div class="timeline-item">-->
      

<!--      <div class="timeline-content js--fadeInLeft">-->
<!--          <div class="timeline-head">-->
<!--               <h2>FICCI Healthcare Excellence Awards 2022:</h2>-->
        <!--<div class="date">2022</div>-->
<!--        <p>Special Jury Recognition for 'Excellence in Capacity Building'</p>-->
<!--          </div>-->
       
<!--        <img src="assets/image/pics/ficci-award.PNG" class="figure-img img-fluid rounded" alt="...">-->
        
<!--      </div>-->
<!--    </div> -->
<!--          </div>-->
<!--          <div class="col-sm-12 col-lg-6">-->
<!--               <div class="timeline-item">-->

     

<!--      <div class="timeline-content  js--fadeInRight">-->
<!--         <div class="timeline-head">-->
<!--          <h2>Mahatma Awards 2022:</h2>-->
       
        <!--<div class="date">2022</div>-->
<!--        <p>Social Good and Impact </p>-->
<!--        </div>-->
<!--        <img src="assets/image/pics/mahatma-award.PNG" class="figure-img img-fluid rounded" alt="...">-->
<!--      </div>-->

<!--    </div>   -->
<!--          </div>-->
<!--          <div class="col-sm-12 col-lg-6">-->
<!--               <div class="timeline-item">-->
<!--      <div class="timeline-content js--fadeInLeft">-->
<!--        <div class="timeline-head">-->
<!--          <h2>PRmoment India:</h2>-->
<!--        <p>Best Social Campaign & CSR Award 2022 for our ANGEL - #ThankANurse Program, under the ‘GOLD’ category</p>-->
<!--        </div>-->
<!--        <img src="assets/image/pics/health-coms.PNG" class="figure-img img-fluid rounded" alt="...">-->
<!--      </div>-->
<!--    </div>  -->
<!--          </div>-->
<!--          <div class="col-sm-12 col-lg-6">-->
<!--               <div class="timeline-item">-->

     

<!--      <div class="timeline-content js--fadeInRight">-->
<!--           <div class="timeline-head">-->
<!--        <h2>CSR Health Awards 2022:</h2>-->
        <!--<div class="date">2022</div>-->
<!--        <p>Health CSR Project Award, under the 'Gold' category, conducted by IHW Council. </p>-->
<!--        </div>-->
<!--         <img src="assets/image/pics/csr-award.PNG" class="figure-img img-fluid rounded w-100" alt="...">-->
<!--      </div>-->
<!--    </div>  -->
<!--          </div>-->
<!--      </div>-->
    

   

    

    

   
<!--  </div>-->
<!--</section>-->
</section>
