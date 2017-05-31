
<section id="reservations" class="description_content" style="padding-top: 100px; background:url('users/images/restaurant_02.png');">
    <div class="text-content clear"  >
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
            <div class="row" style="padding-bottom:105px;">
                <div class="col-md-6 col-md-offset-1" style=" height:510px ">
                    <div class="col-md-6" >
                        <img style="float: right;" src="users/img/restaurant4_03.png"   alt="Image">
                    </div>
                    <div class="col-md-6">
                        <img  style="float: left;" src="users/img/restaurant_05.png"  alt="Image">
                    </div>
                </div>
                <div class="col-md-4"  "> 
               
                    <p style="font-size:30px ;font-family: 'Yeseva One', cursive; color: #cc9900" >Just the right food</p>
                     <img style="padding-bottom: 30px" src="users/img/restaurant3_04.png">
                   
                    <p class="reservation_text">
                    If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food.</p>
                    <p class="reservation_text">Delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out! Perfect materials and freshly baked food.</p>
                 <div class="row" style="padding-top: 40px;">
                    <form method="post" action="{{URL::route('reservations') }}">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <div class="form-group has-warning has-feedback">
                        <label  class="reservation_label " >Name</label>
                       <input required="" maxlength="20"  minlength="3" type="text"  style="border-radius: 0px;"  name="name" class="reservation_input form form-control" placeholder="your name *">
                   </div>
                   </div>
                    <div class="col-md-6">
                        <div class="form-group has-warning has-feedback">
                        <label class="reservation_label" >Email</label>
                       <input required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  style="border-radius: 0px;" type="Email" name="email" class="form form-control" placeholder="your email *">
                   </div>
                   </div>
                    <div class="col-md-6">
                        <div class="form-group has-warning has-feedback">
                        <label class="reservation_label" >Date</label>
                        <input style="border-radius: 0px;" title=" YYYY-MM-DD" pattern='(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))'  required="" id="date" type="date" name="date" class="form form-control" placeholder="your date *">
                        
                        </div>
                   </div>
                    <div class="col-md-6">
                        <div class="form-group has-warning has-feedback">
                        <label class="reservation_label" >Party number</label>
                       
                      
                       <select style="border-radius: 0px;" name="party_number" id="input" class="form-control" required="required">
                           <option value="">party number</option>
                           <option value="1">1 person</option>
                           <option value="2">2 person</option>
                           <option value="3">3 person</option>
                           <option value="4">4 person</option>
                           <option value="5">5 person</option>
                           <option value="6">6 person</option>
                           <option value="7">7 person</option>
                           <option value="8">8 person</option>
                           <option value="9">9 person</option>
                           <option value="10">10 person</option>
                           
                       </select>
                          </div>
                   </div>
                    
                   <div class="col-md-6 col-md-offset-3">
                   <button type="submit" style="border-radius: 0px;"  class=" form-control  btn-primary  btn btn-warning">Book Now</button>
                   </div>
                   </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('script')


@endsection