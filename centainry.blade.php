<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/csstest1.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

    <link rel="stylesheet" href="../public/csstest1.css">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=K2D|Kanit|Prompt" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  
    <title>Document</title>
</head>
<body>
<div class="header2">
<div class="container fix-container">
    <div class="row">
         <div class="col-12">
            <div class="logo"><img src="../img/img3.png"  ></div>
         </div>
        <div class="d-none d-md-block">
           <div class="airplan  animated infinite pulse delay-2s">
           <img src="../img/img9.png"  >
           </div>
        </div>
    </div>
    <div class="row">
         <div class="col-12">
            <div class="logo1 animated infinite pulse delay-2s"><img src="../img/img4.png"  ></div>
         </div>
    </div>
    <div class="test1">
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class=""></div>
        </div>
        <div class="col-12 col-lg-4 order-lg-2">
            <div class="logo2" align="center">
              <img src="../img/img5.png"  >
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="button3" align="center">
              <a href="index.html" data-toggle="modal" data-target="#modalQuickView">ของรางวัล</a>
              <a href="index.html" data-toggle="modal" data-target="#modalQuickView1">กติการ่วมสนุก</a>
            </div>
        </div>
    </div>
    </div>
</div>
</div>


<div class="bgbody">
 <div class="container">

  <div class="col-12">
   <div class="content3">
   <form action="{{URL::to('resgiter')}}" method="post">
          <div class="content" align="center">
              <h2>กรอกข้อมูลสำหรับติดต่อกลับ เพื่อประโยชน์ในการรับของรางวัล </h2>
              
              <P>* กรุณากรอกข้อมูลให้ถูกต้องและครบถ้วน  </P>
          </div>

          <div class="row">    
              <div class="col-sm-2" >
              <label class="form-check-label"></label>   
              </div> 
              <div class="col-sm-2" >
              <label class="form-check-label">ชื่อ-นามสกุล*</label>   
              </div>          
                  <div class="col-sm-6">
                      <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                      <input type="text" class="form-control" name="name" value="">
                  </div>
          </div>   
          
          <div class="row">    
              <div class="col-sm-2" >
              <label class="form-check-label"></label>   
              </div> 
              <div class="col-sm-2">
              <label class="form-check-label">วันเดือนปีเกิด*</label>   
              </div>          
              <div class="col-sm-6">
              <input class="form-control"  id="date" name="date" placeholder="DD/MM/YYYY" type="text"/>
    
              </div>
              <div class="col-sm-2">
                  
              </div>
              <div class="col-sm-2">
                 
              </div>
          </div>      
          
          <div class="row">    
              <div class="col-sm-2" >
              <label class="form-check-label"></label>   
              </div> 
              <div class="col-sm-2">
              <label class="form-check-label">เบอร์โทรศัพท์<a>*</a></label>   
              </div>          
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="tel" value="">
                  </div>
          </div>  
          
          <div class="row">
              <div class="col-sm-2" >
              <label class="form-check-label"></label>   
              </div>     
              <div class="col-sm-2">
              <label class="form-check-label">อีเมล์</label>   
              </div>          
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="email" value="">
                  </div>
           </div>  
           

          <div class="row ">
              <div class="col-sm-2" >
              <label class="form-check-label"></label>   
              </div> 
              <div class="col-sm-2">
                  <label for="">จังหวัด</label>
              </div>
                  <div class="col-sm-6">  
                      <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                      <select class="form-control" name="provinces" id="provinces">
                          <option value="0" disable="true" selected="true">เลือกจังหวัด</option>
                          @foreach ($provinces as $key => $value)
                      <option value="{{$value->id}}">{{ $value->name_th }}</option>
                      @endforeach
                      </select>
                  </div>
          </div>
          
          <div class="row ">
              <div class="col-sm-2" >
                  <label class="form-check-label"></label>   
              </div> 
              <div class="col-sm-2">
                  <label for="">อำเภอ</label>
              </div>
              <div class="col-sm-6">
              <select class="form-control" name="amphures" id="amphures">
                  <option value="0" disable="true" selected="true">เลือกอำเภอ</option>
              </select>
              </div>
          </div>
      
          <div class="row ">
              <div class="col-sm-2" >
                  <label class="form-check-label"></label>   
              </div> 
              <div class="col-sm-2">
                  <label for="">ตำบล</label>
              </div>
              <div class="col-sm-6">
                  <select class="form-control" name="districts" id="districts">
                      <option value="0" disable="true" selected="true">เลือกตำบล</option>
                  </select>
              </div>
          </div>
          

          <div class="row">
              <div class="col-sm-2" >
                  <label class="form-check-label"></label>   
              </div>     
              <div class="col-sm-2">
                  <label class="form-check-label">รหัสไปรษณีย์</label>   
              </div>          
                  <div class="col-sm-6">
                 
                 
                  
                      <input value="" class="form-control" disable="true" id="zip_code" name="zip_code" type="text">
                      
                
                  
                      
                  </div>
          </div>  
          
          <div class="row">    
              <div class="col-sm-2" >
              <label class="form-check-label"></label>   
              </div> 
              <div class="col-sm-2">
              <label class="form-check-label">ที่อยู่*</label>   
              </div>          
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="address" value="">
                  </div>
          </div> 
          

          <div class="row">
          <div class="col-sm-2" >
              <label class="form-check-label"></label>   
              </div> 
          <div class="col-sm-2">
              <label class="form-check-label"></label>   
              </div>   
              <div class="col-sm-6">
              <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" value=""> ข้าพเจ้ายอมรับ "<a href=""  data-toggle="modal" data-target="#modalQuickView2">เงื่อนไขและข้อตกลง</a>" ทั้งหมดของกิจกรรม 
                  </label>
              </div>
              </div>
          </div>
         
          <div class="row" align="center">
               <div class="col-sm-2" >
              <label class="form-check-label"></label>   
              </div> 
              <div class="col-sm-2">
                  <label class="form-check-label"></label>   
              </div>   
              <div class="col-sm-6">
               <div class="button1">
                     <button type="submit" class="btn btn-primary"  >ส่งข้อมูล</button>
              </div> 
              </div> 
          </div>
          </form> 
        <div class="row">
           <div class="col-sm-12">
             
              <div class="img6">
                
              </div>
           </div>
        
        </div>
        



      </div>
     
      <div class="img7">
          <img src="../img/img7.png" alt="" height="100%" width="100%"   >
      </div>
  </div>
  
</div>
</div>  
</div>
</div>


<script type="text/javascript">
        
        $('#provinces').on('change', function(e){
          var province_id = e.target.value;
  
          $.get('/json-amphures?province_id=' + province_id,function(data) {
            $('#amphures').empty();
            $('#amphures').append('<option value="0" disable="true" selected="true">เลือกอำเภอ</option>');
  
            $('#districts').empty();
            $('#districts').append('<option value="0" disable="true" selected="true">เลือกตำบล</option>');

           // $('#zip_code').empty();
            //$('#zip_code').append('<input type="text" class="form-control" name="zip_code" id="zip_code" disable="true" value="">');
  
            $.each(data, function(index, amphuresObj){
              $('#amphures').append('<option value="'+ amphuresObj.id +'">'+ amphuresObj.name_th +'</option>');
            })
          });
        });
  
        $('#amphures').on('change', function(e){
            
         var amphure_id = e.target.value;
  
          $.get('/json-districts?amphure_id=' + amphure_id,function(data) {
  
            $('#districts').empty();
            $('#districts').append('<option value="0" disable="true" selected="true">เลือกตำบล</option>');
  
            $.each(data, function(index, districtsObj){
              $('#districts').append('<option value="'+ districtsObj.id +'">'+ districtsObj.name_th +'</option>');
              
           })
          });
        });
        
        $('#districts').on('change', function(e){
             var districts_id = e.target.value; 

        $.get('/json-zip_code?districts_id=' + districts_id,function(data) {
            
            $.each(data, function(index, districts){
              $('#zip_code').val([districts.zip_code]);
              
           })
           
           
         
            });
        });

      </script>
   
</body>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
           
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>

</html>
<!-- Modal: modalQuickView -->
<div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="img10">
      <div class="close10" data-dismiss="modal"  align="right">
         <img src="../img/img22.png"  >
         </div>
         <div class="img21 animated swing delay-2s">
         <img src="../img/img21.png"  >
         </div>
      </div>
      
        <div class="modal-body">
      
      <div class="row">
       <div class="col-12 col-lg-6 ">
            <div class="img11" align="center">
              <img src="../img/img11.png"  >
            </div>
        </div>
        <div class="col-12 col-lg-6 order-lg-2">
            <div class="img12"align="center" >
            <img src="../img/img12.png"  >
            </div>
            <div class="img13" align="center" >
           <img src="../img/img13.png"  >
           </div>
         </div>
       </div>
       <div class="row">
           <div  class="col-12 ">
               <div class="border1">

               </div>
           </div>

       </div>
      <div class="row">
         <div class="col-12 col-lg-6 ">
           <div class="img14" align="center">
           <img src="../img/img14.png"  >
           </div>
         </div>
         <div class="col-12 col-lg-6 order-lg-2">
         <div class="img15"align="center" >
           <img src="../img/img15.png"  >
           </div>
         </div>
      </div>
      <div class="row">
           <div class="col-sm-12">
             
              <div class="img16">
              </div>
              <div class="img17">
              </div>
              <div class="img19">
              <img src="../img/img19.png"  >
              </div>
           </div>

        </div>


     </div>
    </div>
  </div>
</div>

<!-- Modal: modalQuickView1 -->
<div class="modal fade" id="modalQuickView1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="img10">
      <div class="close10" data-dismiss="modal"  align="right">
         <img src="../img/img22.png"  >
         </div>
         <div class="img21 animated swing delay-2s">
         <img src="../img/img24.png"  >
         </div>
      </div>
      
        <div class="modal-body">
        
        <div class="row">
        <div class="col-12 col-lg-3 ">
            <div class="img23"  >
            <img src="../img/img23.png"  >
            </div>
        </div>
        <div class="col-12 col-lg-9 order-lg-2">
            <div class="borderimg23" >
           <p><a style="color:#0279c5;text-shadow: 1px 1px 2px #d6d4d4;">โพสต์ภาพถ่าย "ชวนรุ่นใหญ่ไปแชร์ความสุข"</a>ที่หน้าเฟซบุ๊กส่วนตัว พร้อม #ชวนรุ่นใหญ่ไปแชร์ความสุข #CertaintyMaxiPants (ตั้งค่าเป็นสาธารณะ)</p>
            </div>
            
         </div>
       </div>
       <div class="row">
        <div class="col-12 col-lg-3 ">
            <div class="img25" >
            <img src="../img/img25.png"  >
            </div>
        </div>
        <div class="col-12 col-lg-9 order-lg-2">
            <div class="borderimg25" >
            <p><a style="color:#0279c5;text-shadow: 1px 1px 2px #d6d4d4;">กด Like และ Share</a> โพสต์กิจกรรมแบบสาธารณะ</p>
            </div>
            
         </div>
       </div>
       <div class="row">
        <div class="col-12 col-lg-3 ">
            <div class="img26" >
            <img src="../img/img26.png"  >
            </div>
        </div>
        <div class="col-12 col-lg-9 order-lg-2">
            <div class="borderimg26" >
            <p><a style="color:#0279c5;text-shadow: 1px 1px 2px #d6d4d4;">กรอกข้อมูลสำหรับติดต่อกลับ</a>ที่หน้าเว็บไซต์ เพื่อประโยชน์ในการรับของรางวัล</p>
            </div>
            
         </div>
       </div>
       <div class="row">
        <div class="col-12 col-lg-3 ">
            <div class="img27" >
            <img src="../img/img27.png"  >
            </div>
        </div>
        <div class="col-12 col-lg-9 order-lg-2">
            <div class="" >
            <p><a style="color:#0279c5;text-shadow: 1px 1px 2px #d6d4d4;">คัดเลือกผู้ที่ทำตามกติกาครบถ้วน</a> รับฟรี! ของรางวัลมากมาย</p>
            </div>
            
         </div>
       </div>
       <div class="row">
         <div class="col-12  ">
            <div class="img28" align="center" >
            <img src="../img/img28.png"  >
            </div>
         </div>
        </div>

       <div class="row ">
         <div class="col-12  col-lg-3 img29a">
            <div class="img29" align="center" >
            <img src="../img/img29.png"  >
            </div>
         </div>
         <div class="col-12  col-lg-3 img30a">
            <div class="img30" align="center" >
            <img src="../img/img30.png"  >
            </div>
         </div>
         <div class="col-12  col-lg-3 img31a">
            <div class="img31" align="center" >
            <img src="../img/img31.png"  >
            </div>
         </div>
         <div class="col-12  col-lg-3 ">
            <div class="img32" align="center" >
            <img src="../img/img32.png"  >
            </div>
         </div>
       </div>
       <div class="row">
         <div class="col-12  col-lg-9">
            <div class=""  >
            
            </div>
         </div>
         <div class="col-12  col-lg-3 ">
            <div class="img33" align="center" >
            <img src="../img/img33.png"  >
            </div>
         </div>
        
       </div>
      <div class="row">
          <div class="col-12">
              <div class="border11">

              </div>

          </div>

      </div>

       <div class="row">
         <div class="col-12  col-lg-12">
            <div class="img34"  >
            <img src="../img/img34.png"  >
            </div>
         </div>
         <div class="col-12  col-lg-12">
            <div class="text1"  >
            <p>ติดตามการประกาศรายชื่อผู้โชคดีได้ในวันที่ 20 พฤศจิกายน 2561 ทาง Facebook Certainty Club</p>
            </div>
         </div>
        
       </div>
       <div class="row">
           <div class="col-sm-12">
             
              <div class="img16a">
              </div>
              <div class="img17a">
              </div>
              <div class="img19a">
              <img src="../img/img19.png"  >
              </div>
           </div>

        </div>

     </div>
    </div>
  </div>
</div>
<!-- Modal: modalQuickView2 -->
<div class="modal fade" id="modalQuickView2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="img10">
      <div class="close10" data-dismiss="modal"  align="right">
         <img src="../img/img22.png"  >
         </div>
         <div class="img21 animated swing delay-2s">
         <img src="../img/img35.png"  >
         </div>
      </div>
      
        <div class="modal-body">
         <div class="row">
           <div class="col-12">
               <div class="text2">
                        <ol>
                            <li>ผู้โชคดีจะต้องเป็นแฟนเพจ Certainty Club</li>
                            <li>สงวนสิทธิ์การแจกของรางวัล 1 รางวัล ต่อ 1 ท่าน ตลอดกิจกรรม และขอสงวนสิทธิ์ในการมอบรางวัล ให้ผู้โชคดีที่ทำถูกต้องตามกติกาและเงื่อนไข รวมทั้งกรอกที่อยู่ (เลขที่, ถนน, ตำบล, อำเภอ, จังหวัด และรหัสไปรษณีย์) ครบถ้วนเท่านั้น</li>
                            <li>ผู้โชคดีที่ได้รับรางวัลที่ 1,2 และ 3 หากไม่ยืนยันสิทธิ์รับรางวัลภายใน 7 วัน หลังจากประกาศผล จะถือว่าสละสิทธิ์</li>
                            <li>ผู้โชคดีที่ได้รับรางวัลที่ 1 แพกเกจทัวร์ฮ่องกง 4 ท่าน จะต้องมีผู้สูงวัย ร่วมเดินทางไปด้วยอย่างน้อย 1 ท่าน </li>
                            <li>ผู้โชคดีที่ได้รับรางวัลที่ 1 จะต้องแชร์ภาพถ่ายจากทริปฮ่องกง ที่หน้าเฟซบุ๊กส่วนตัว อย่างน้อย 3 ภาพ พร้อม Hashtag #ชวนรุ่นใหญ่ไปแชร์ความสุข #MaxiPants #CertaintyClub (ตั้งค่าเป็นสาธารณะ)  </li>
                            <li>ของรางวัลไม่สามารถเปลี่ยนเป็นเงินสด หรือโอนสิทธิ์ให้ผู้อื่นได้ในทุกกรณี</li>
                            <li>ผู้โชคดีที่ได้รับรางวัลมูลค่าตั้งแต่ 1,000 บาทขึ้นไป จะต้องชำระภาษี ณ ที่จ่ายในอัตราร้อยละ 5 ของมูลค่าของรางวัล รวมทั้งเป็นผู้ชำระค่าธรรมเนียมต่างๆ ที่เกิดจากการได้รับรางวัล</li>
                            <li>ภาพที่ส่งเข้าร่วมกิจกรรม ต้องเป็นภาพของตัวผู้ร่วมกิจกรรมเอง หรือ เป็นภาพที่ผู้ร่วมกิจกรรมถ่ายเท่านั้น โดย Certainty ไม่ขอรับผิดชอบต่อรูปภาพที่ละเมิดลิขสิทธิ์ของผู้อื่น และสงวนสิทธิ์ในการลบรูปภาพ,ข้อความที่ไม่เหมาะสม</li>
                            <li>ทาง Certainty ขอสงวนสิทธิ์ในการเปลี่ยนแปลง แก้ไข เงื่อนไขในกติกาต่างๆ โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                            <li>ในการคัดเลือกผู้โชคดีจากกิจกรรม Certainty จะดำเนินการคัดเลือกต่อหน้าคณะกรรมการ ตัวแทนหรือผู้ที่มีอำนาจเกี่ยวข้อง และสักขีพยานอิสระ โดยการตัดสินของคณะกรรมการถือเป็นคำตัดสินเด็ดขาดในทุกกรณี </li>
                            <li>นโยบายความเป็นส่วนตัว อ่านเพิ่มเติม <a target="_blank" href="#">คลิก</a></li>
                        </ol>
              </div>
            </div>
         </div>

        <div class="row">
           <div class="col-sm-12">
             
              <div class="img16a1">
              </div>
              <div class="img17a1">
              </div>
              <div class="img19a1">
              <img src="../img/img19.png"  >
              </div>
           </div>

        </div>

     </div>
    </div>
  </div>
</div>