            <div class="row" style="padding-right:50px;padding-left: 50px">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(Session::has('success'))
                        <p class="alert alert-success">{{Session('success')}}</p>
                    @endif
                   
                </div>
<form method="POST" action="{{route('store')}}" class="form-control">
	@csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Full name *</label> <input id="form_name" type="text" name="full_name" class="form-control" required="required" /> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Mobile *</label> <input id="form_lastname" type="number" min="0" name="mobile" class="form-control" required="required" data-error="Mobile is required."> </div>
                                    </div>
                                      <input type="hidden" name="hidden" value="1" />

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email </label> <input id="form_email" type="email" name="email" class="form-control"  > </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Please specify your city *</label> <select  name="city" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select Your City--</option>
                                                <option>Beirut</option>
                                                <option>Baalbeck</option>
                                                <option>Hermel</option>
                                                <option>Tripoly</option>
                                                <option>Saida</option>
                                                <option>Byblos</option>
                                                <option>Jounieh</option>
                                                <option>Tyre</option>
                                                <option>Baabda</option>
                                                <option>other</option>
                                            </select> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_email">Usdt Amount To Buy *</label> <input id="form_email" type="number" min="50" name="amount" class="form-control"  required="required" > </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Full Address</label> <textarea id="form_message" name="address" class="form-control" placeholder="Write your specific address here." rows="4"  data-error="Please, leave us a message."></textarea> </div>
                                    </div>
                                    <div class="col-md-12 " style="padding: 5px;"> <input type="submit" class="btn btn-primary btn-send pt-2 btn-block " value="Buy Usdt"> </div>
                                </div>
                            </div>
                        </form>