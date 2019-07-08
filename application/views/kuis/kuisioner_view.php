<!DOCTYPE html>
<html>
<head>
  <title>Kuisiner</title>
  <link href="<?= base_url('assets/kuis') ?>/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="<?= base_url('assets/kuis') ?>/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/kuis') ?>/jquery-1.11.1.min.js"></script>
  <style type="text/css">
    .content-box{ display:none;}
    .active-content,.active-content-new{  display:block;}
    /*
    ==============
    LEFT SECTION 
    ===============
    */
    .left-section ul li a {
        display: block;
        padding: 6px;
        background: #f00;
        color: #fff;
        margin-bottom: 7px;
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
        text-align: center;
        font-size: 28px;
    }
    .right-section {
        padding: 40px;
        background: #f5f5f5;
    }
    .active-tab-menu a,.active-tab-menu-new a {
        background: #4CAF50 !important;
    }
    .left-section ul li{ list-style-type:none;}
    .left-section ul{ padding:0px; margin:0px;}
    .custom-button-section a {
        display: block;
        padding: 10px;
        float: left;
        background: #f00;
        color: #fff;
        margin-right: 10px;
        width: 100px;
        text-align: center;
    }
    .custom-button-section-r a {
        display: block;
        padding: 10px;
        float: left;
        background: green;
        color: #fff;
        margin-right: 10px;
        width: 100px;
        text-align: center;
    }
    .button-row:after {
        content: "";
        clear: both;
        display: block;
    }
    .button-row {
        margin-top: 36px;
    }
    .Hide-this{ display:none;}

  </style>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<!-----------/// MAIN FORM START -------->
<div class="container" style="background-color: white;">
  <div class="row">
     <div class="col-sm-12 multistep-form-section">
      <!------/// LEFT PART ----->
           <div class="col-sm-3 left-section">
                <ul>
                  <li class="form-step-1 active-tab-menu"><a href="#">Kuisioner 1</a></li>
                  <li class="form-step-2"><a href="#">Step 2</a></li>
                  <li class="form-step-3"><a href="#">Step 3</a></li>
                  <li class="form-step-4"><a href="#">Step 4</a></li>
                  <li class="form-step-5"><a href="#">Step 5</a></li>
                </ul>
           
           </div>
      <!---------/// LEFT PART END --->
      <!-------// RIGHT PART --->
           <div class="col-sm-9 right-section">
                <div class="content-box form-step-1-content active-content">
                 <h1>Step 1</h1>
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </br><input type="radio" name="a" value="a" >AAA </br>
                <input type="radio" name="a" value="a" >AAA </br>
                <input type="radio" name="a" value="a" >AAA </br>
                <input type="radio" name="a" value="a" >AAA </br>
               </div>
                <div class="content-box form-step-2-content">
                <h1>Step 2</h1>
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
               </div>
                <div class="content-box form-step-3-content">
                <h1>Step 3</h1>
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
               </div>
                <div class="content-box form-step-4-content">
                <h1>Step 4</h1>
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
               </div>
                <div class="content-box form-step-5-content">
                <h1>Step 5</h1>
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
               </div>
           
           
           
           </div>
               <!--------/// NEXT AND PREVIOUS ROW ------->
               <div class="button-row col-sm-4 pull-right">
                   <div class="previous-section custom-button-section"><a href="#">Previous</a></div>
                  <div class="next-section custom-button-section-r"><a href="#">Next</a></div>
               </div>
               <!---------/// NEXT AND PREVIOUS END -------->
      <!------/// RIGHT PART END --->
     
     </div>
  </div>

</div>
<!-----------/// MAIN FORM END ----------->
<script type="text/javascript">
  // JavaScript Document
$(document).ready(function(e) {
    
  /// Tab Content Start 
  $('.left-section li').click(function(){
    
      /// Remove Class
       $('li').removeClass('active-tab-menu');
       $('.content-box').removeClass('active-content');
       
      // Add Class
      $(this).addClass('active-tab-menu');
      var getTabMenuClass = $(this).attr('class').split(' ')[0];
      $('.'+getTabMenuClass+'-content').addClass('active-content');
      
      /// Hide Next And Previous
           if(getTabMenuClass=='form-step-1')
       {
        $('.previous-section').addClass('Hide-this'); 
        $('.next-section').removeClass('Hide-this');
       }
       else if(getTabMenuClass=='form-step-5')
       {
        $('.next-section').addClass('Hide-this'); 
        $('.previous-section').removeClass('Hide-this');
       }
       else
       {
         $('.previous-section').removeClass('Hide-this');
         $('.next-section').removeClass('Hide-this');
         
       }
      
      
    
    })
  
  /// Tab Content End here 
  
  /// NEXT SECTION 
  $('.next-section').click(function(){
    
    if($('li').hasClass('active-tab-menu'))
    {
      /// Tab Menu
       $('.active-tab-menu').next().addClass('active-tab-menu-new');
       $('.active-tab-menu-new').prev().removeClass('active-tab-menu');
       // Tab Content
       $('.active-content').next().addClass('active-content-new');
       $('.active-content-new').prev().removeClass('active-content');
    }
    else
    {
      /// Tab Menu
       $('.active-tab-menu-new').next().addClass('active-tab-menu');
       $('.active-tab-menu').prev().removeClass('active-tab-menu-new');
       // Tab Conten
       $('.active-content-new').next().addClass('active-content');
       $('.active-content').prev().removeClass('active-content-new');
    }
    
    });
  
  /// NEXT SECTION END
  
  /// PREVIOUS SECTION 
  $('.previous-section').click(function(){
    
    if($('li').hasClass('active-tab-menu'))
    {
      /// Tab Menu
       $('.active-tab-menu').prev().addClass('active-tab-menu-new');
       $('.active-tab-menu-new').next().removeClass('active-tab-menu');
       // Tab Content
       $('.active-content').prev().addClass('active-content-new');
       $('.active-content-new').next().removeClass('active-content');
    }
    else
    {
      /// Tab Menu
       $('.active-tab-menu-new').prev().addClass('active-tab-menu');
       $('.active-tab-menu').next().removeClass('active-tab-menu-new');
       // Tab Conten
       $('.active-content-new').prev().addClass('active-content');
       $('.active-content').next().removeClass('active-content-new');
    }
    
    });
  
  /// NEXT SECTION END 
  
  
  
  
});
</script>
</body>
</html>