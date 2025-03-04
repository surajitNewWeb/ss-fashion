<style>
     .footer{
   background: #fff;
 }
 .footer .box-container{
   border: 0px solid;
   display: grid;
   grid-template-columns: repeat(auto-fit,minmax(26rem, 1fr));
   gap: 1.5rem;

 }
 .footer .box-container .box h3{
   font-size: 2.5rem;
   color: var(--black);
   padding: 1rem 0;
 }
 .footer .box-container .box h3 i{
   color: var(--red);
 }
 .footer .box-container .box .links{
   display: block;
   font-size: 1.5rem;
   color: var(--light-color);
   padding: 1rem 0;
  
 }
 .abc{
    text-decoration: none;
}
 .footer .box-container .box .links i{
   color: var(--red);
   padding-right: 1.5rem;
 }
 .footer .box-container .box .links:hover i{
   padding-right: 2rem;
 }
 .footer .box-container .box p{
  line-height: 1.8;
   font-size: 1.5rem;
   color: var(--light-color);
   padding: 1rem 0;
 }
 .footer .box-container .box .share a{
   height: 4rem;
   width: 4rem;
   line-height: 4rem;
   border-radius: .5rem;
   font-size: 2rem;
   color: var(--black);
   margin-left: .2rem;
   background: #eee;
   text-align: center;
 }
 .footer .box-container .box .share a:hover{
   background: var(--red);
   color: #fff;
 }
 .footer .box-container .box .email{
   width: 100%;
   margin: .7rem 0;
   padding: 1rem;
   border-radius: .5rem;
   background: #eee;
   font-size: 1.6rem;
   color: var(--black);
   text-transform: none;
 }
 .footer .box-container .box .payment-img{
   margin-top: 2rem;
   height: 3rem;
 }
 .footer .credit{
   text-align: center;
   margin-top: 2rem;
   padding: 1rem;
   padding-top: 2.5rem;
   font-size: 2rem;
   color: var(--black);
   border-top: var(--outline);
 }
 .footer .credit span{
   color: var(--red);
 }
</style>

  <!-- START CODE FOR FONT AWSAME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  CLOSE CODE FOR FONT AWSAME CDN -->
<section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>SS-FASHION <i class="fa-solid fa-vest-patches"></i></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Impedit vel deserunt consequuntur. Ea, quisquam, repellat quis modi 
           ar tenetur dolor nisi, asperiores 
        conseremque laboriosam! In!</p>

        <div class="share">
          <a href="#" class="abc fa-brands fa-facebook"></a>
          <a href="#" class="abc fa-brands fa-instagram"></a>
          <a href="#" class="abc fa-brands fa-twitter"></a>
          <a href="#" class="abc fa-brands fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <h3>Contact info</h3>
        <a href="#" class="links"><i class="fa fa-phone"></i> +91 7718759848</a>
        <a href="#" class="links"><i class="fa fa-phone"></i> +91 7866846668</a>
        <a href="#" class="links"><i class="fa fa-envelope"></i> surajitsamantakultha@gmail.com</a>
        <a href="#" class="links"><i class="fa fa-map-market"></i> India</a>
          
        </div>
        <div class="box">
          <h3>Quick links</h3>
          <a href="#" class="links"><i class="fa fa-arrow-right"></i> home</a>
          <a href="#" class="links"><i class="fa fa-arrow-right"></i> features</a>
          <a href="#" class="links"><i class="fa fa-arrow-right"></i> product</a>
          <a href="#" class="links"><i class="fa fa-arrow-right"></i> categories</a>
          <a href="#" class="links"><i class="fa fa-arrow-right"></i> review</a>
          <a href="#" class="links"><i class="fa fa-arrow-right"></i> Blogs</a>
            
          </div>

          <div class="box">
            <h3>Newsletters</h3>
            <p>subscribe for letter updats</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <!-- <img src="image/IMG-20240407-WA0001.jpg" class="payment-img"> -->
            
              
            </div>
      </div>

      <div class="credit">not copy <span>SS-Fashion</span> all right reserved</div>
    
  </section>