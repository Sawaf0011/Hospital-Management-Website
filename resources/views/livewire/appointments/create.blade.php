<div>
    @if($message === true)
        <script>
            alert('Booking details have been sent to the hospital. Appointment information will be sent via phone and email.')
            location.reload()
        </script>
    @endif

    @if($message2 === true)
        <script>
            alert('No appointments available for this day. Please choose another day.')
        </script>
    @endif

    @if($message3 === true)
        <script>
            alert('You can only book on this day once.')
            location.reload()
        </script>
    @endif


    <form wire:submit.prevent="store">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="text" name="username" wire:model="name" placeholder="Your Name" required="">
                <span class="icon fa fa-user"></span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="email" name="email" wire:model="email" placeholder="Email" required="">
                <span class="icon fa fa-envelope"></span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="exampleFormControlSelect1">Doctor</label>
                <select name="doctor" wire:model="doctor" class="form-select" id="exampleFormControlSelect1">
                    @foreach($doctors as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="exampleFormControlSelect1">Department</label>
                <select class="form-select" name="section" wire:model="section" id="exampleFormControlSelect1">
                    <option>-- Select from the list --</option>
                    @foreach($sections as $section)
                        <option value="{{$section->id}}">{{$section->name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                <input type="tel" name="phone" wire:model="phone" placeholder="Phone Number" required="">
                <span class="icon fas fa-phone"></span>
            </div>

            <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                <label for="exampleFormControlSelect1">Appointment Date</label>
                <input type="date" name="appointment_patient" wire:model="appointment_patient" required
                       class="form-control">
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <textarea name="notes" wire:model="notes" placeholder="Notes"></textarea>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                    <span class="txt">Confirm</span></button>
            </div>
        </div>
    </form>
</div>
