@extends('user.layout.master')

@section('content')
<div class="best-offer-sec comm-PTB-half">
   <div class="container">
      <h2 class="text-center mb-4" data-aos="fade-up" data-aos-delay="100">All Categories</h2>

      <div class="row best-offers">

      @foreach($products as $product)
         <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="best-offer-box skyblue-box">
               <div class="offer-card-det">
                  <div class="offer-card"><img src="{{ asset('public/' . $product->image) }}" alt=""></div>
                  <div class="offer-card-name">
                     <h6>{{ $product->name }}</h6>
                     <p>{{ $product->category->name }}</p>
                  </div>
               </div>
               <div class="price-rating flex-cn-sb">
                  <div class="rating-star">
                     <i class="fa fa-star yellow-star"></i>
                     <i class="fa fa-star yellow-star"></i>
                     <i class="fa fa-star yellow-star"></i>
                     <i class="fa fa-star yellow-star"></i>
                     <i class="fa fa-star lightblue-star"></i>
                  </div>
                  <div class="card-price">
                     <span>$ {{ $product->price }}</span>  <!--<del>$24.90</del> -->
                  </div>
               </div>
               <div class="card-box-padd">
                  <div class="card-list-sec">
                     <div class="card-list flex-cn-sb">
                        <div class="card-pro">{{ __('Data') }} <div class="info-tooltip"><i class="bi bi-question-circle"></i>
                           <div class="show-info-tooltip">{{$product->data_detail}}<i class="pointer"></i></div>
                        </div> 
                     </div>
                     <div class="card-pro-res">{{$product->data}}</div>
                  </div>


                  <div class="card-list flex-cn-sb">
                     <div class="card-pro">{{ __('Calls') }} <div class="info-tooltip"><i class="bi bi-question-circle"></i>
                        <div class="show-info-tooltip">{{ $product->calls_detail }}<i class="pointer"></i></div></div>  
                     </div>
                     <div class="card-pro-res">{{ $product->calls }}</div>
                  </div>

                  <div class="card-list flex-cn-sb">
                     <div class="card-pro">{{ __('SMS') }}
                        <div class="info-tooltip"><i class="bi bi-question-circle"></i>
                           <div class="show-info-tooltip">{{ $product->sms_detail}}<i class="pointer"></i></div>
                        </div> 
                     </div>
                     <div class="card-pro-res">{{$product->sms}}</div>
                  </div>   

                     <div class="card-list flex-cn-sb">
                        <div class="card-pro">Credit validity
 
                           <div class="info-tooltip"><i class="bi bi-question-circle"></i>
                              <div class="show-info-tooltip">{{ $product->credit_validity_detail}}<i class="pointer"></i></div>
                           </div> 
                        </div>
                        <div class="card-pro-res">{{$product->credit_validity}}</div>
                     </div>

                     

                  </div>
                  <div class="sim-show-detail">
                     <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="acc-1">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-1" aria-expanded="false" aria-controls="col-1">
                                 Country Coverage</button>
                           </h2>
                           <div id="col-1" class="accordion-collapse collapse" aria-labelledby="acc-1" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="sim-acc-det">
                                    <ul>
                                       <li>Aland Islands</li>
                                       <li>Austria</li>
                                       <li>Azores</li>
                                       <li>Balearic Islands</li>
                                       <li>Belgium</li>
                                       <li>Bulgaria</li>
                                       <li>Canary Islands</li>
                                       <li>Croatia</li>
                                       <li>Cyprus</li>
                                       <li>Czech Republic</li>
                                       <li>Denmark</li>
                                       <li>Estonia</li>
                                       <li>Finland</li>
                                       <li>France</li>
                                       <li>French Guiana</li>
                                       <li>Germany</li>
                                       <li>Gibraltar</li>
                                       <li>Greece</li>
                                       <li>Guadeloupe</li>
                                       <li>Guernsey</li>
                                       <li>Hungary</li>
                                       <li>Iceland</li>
                                       <li>Ireland</li>
                                       <li>Isle of Man</li>
                                       <li>Italy</li>
                                       <li>Jersey</li>
                                       <li>Latvia</li>
                                       <li>Liechtenstein</li>
                                       <li>Lithuania</li>
                                       <li>Luxembourg</li>
                                       <li>Madeira</li>
                                       <li>Malta</li>
                                       <li>Martinique</li>
                                       <li>Mayotte</li>
                                       <li>Netherlands</li>
                                       <li>Norway</li>
                                       <li>Poland</li>
                                       <li>Portugal</li>
                                       <li>Réunion</li>
                                       <li>Romania</li>
                                       <li>Saint Barthélemy</li>
                                       <li>Saint Martin</li>
                                       <li>San Marino</li>
                                       <li>Slovakia</li>
                                       <li>Slovenia</li>
                                       <li>Spain</li>
                                       <li>Sweden</li>
                                       <li>Switzerland</li>
                                       <li>United Kingdom</li>
                                       <li>Vatican City</li>
                                   </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="acc-2">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-2" aria-expanded="false" aria-controls="col-2">
                                 SIM Card Formats
                              </button>
                           </h2>
                           <div id="col-2" class="accordion-collapse collapse" aria-labelledby="acc-2" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="sim-acc-det">
                                       <div class="bt-order d-flex align-items-start justify-content-between">
                                          <div class="sim-left-cont">Pre-cut in</div>
                                          <div class="sim-right-cont"></div>
                                       </div>
                                       <div class="bt-order d-flex align-items-start justify-content-between">
                                          <div class="sim-left-cont">Standard SIM</div>
                                          <div class="sim-right-cont">25 x 15mm</div>
                                       </div>
                                       <div class="bt-order d-flex align-items-start justify-content-between">
                                          <div class="sim-left-cont">Micro SIM</div>
                                          <div class="sim-right-cont">15 x 12mm</div>
                                       </div>
                                       <div class="bt-order d-flex align-items-start justify-content-between">
                                          <div class="sim-left-cont">15 x 12mm</div>
                                          <div class="sim-right-cont">12.3 x 8.8mm</div>
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="acc-3">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-3" aria-expanded="false" aria-controls="col-3">
                                Top-Up Options
                              </button>
                           </h2>
                           <div id="col-3" class="accordion-collapse collapse" aria-labelledby="acc-3" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="sim-acc-det">
                                    <p>Please note that THREE UK only accepts top up with (1) credit cards that are registered to a UK address or (2) THREE UK top up vouchers.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="acc-4">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-4" aria-expanded="false" aria-controls="col-4">
                                 Compatibility
                              </button>
                           </h2>
                           <div id="col-4" class="accordion-collapse collapse" aria-labelledby="acc-4" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="sim-acc-det">
                                    <p>Usable in any unlocked phone, tethering not allowed.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="acc-5">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-5"  aria-expanded="false" aria-controls="col-5">
                                 Useful information
                              </button>
                           </h2>
                           <div id="col-5" class="accordion-collapse collapse" aria-labelledby="acc-5" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="sim-acc-det">
                                    <p>This SIM Card comes with a U.K. phone number.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="acc-6">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-6" aria-expanded="false" aria-controls="col-6">
                                 APN settings
                              </button>
                           </h2>
                           <div id="col-6" class="accordion-collapse collapse" aria-labelledby="acc-6" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="sim-acc-det">
                                    <p>Access Point Name (or APN): three.co.uk User name: none Password: none **Please always enable your data roaming after inserting your travel SIM Card</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="acc-7">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-7" aria-expanded="false" aria-controls="col-7">
                                 SIM validity
                              </button>
                           </h2>
                           <div id="col-7" class="accordion-collapse collapse" aria-labelledby="acc-7" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="sim-acc-det">
                                    <p><b>1 year</b> (If you are not using your SIM Card within 1 year, your SIM Card becomes invalid.)</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="acc-8">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-8"  aria-expanded="false" aria-controls="col-8">
                                 Activation required
                              </button>
                           </h2>
                           <div id="col-8" class="accordion-collapse collapse" aria-labelledby="acc-8" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="sim-acc-det">
                                    <p><b>No</b> (Please note that the SIM Card activates immediately upon insertion into your device. Your credit validity starts from this moment.)</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="acc-9">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-9" aria-expanded="false" aria-controls="col-9">
                                 SIM Number
                              </button>
                           </h2>
                           <div id="col-9" class="accordion-collapse collapse" aria-labelledby="acc-9" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="sim-acc-det">
                                    <p><b>U.K. (+44)</b> (This SIM Card comes with a U.K. phone number)</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>

                  <div class="offer-list-btn flex-cn-sb">
                     <a href="javascript:void(0);" class="btn btn-primary black-btn more-det-btn">More details</a>
                     <a href="" class="btn btn-primary blue-btn">Buy now</a>
                  </div>
               </div>
            </div>
         </div>
      @endforeach

         

      </div>
   </div>
</div>
@endsection
