@extends('layouts.main') @section('title', $doctor->name) @section('extracss')
<link rel="stylesheet" href="{{ asset('css/doctor.css') }}">
<link rel="stylesheet" href="{{ asset('css/enquiry-form.css') }}"> @endsection @section('content') {{-- Navigation --}}

<style>
    #edu_li:nth-child(odd){
        color: #ff6666;
    }
    #edu_li:nth-child(even){
        color: #b30000;
    }
</style>
<div id="home" class="w3ls-banner">
    <!-- header -->
    <div class="header-w3layouts">
        <!-- Navigation -->
        @include('partials.nav')
    </div>
</div>
{{-- Navigation --}}
<div class="" style="margin-top: 150px;">
    <hr>

    <div class="w3ls-heading title-wrap">
        <h3><i class="text-primary fa fa-user-md fa-heading"></i> Some Notable Doctors In India</h3>
    </div>
    <hr> {{--
    <div class="row"> --}}
        <div class="col-md-3 agile_team_grid agile_team_grid2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <span class="btn btn-danger btn-block btn-compose-email"> <h3><i class="fas fa-award" style="color:yellow;"></i> AWARDS <i class="fas fa-award" style="color:yellow;"></i></h3>
                            <?php $awardArray = explode('.', $doctor->awards);
                                echo '<h4>' .count($awardArray) .'</h4>';
                                for ($i=0; $i < count($awardArray); $i++) { 
                                    echo '<i class="fas fa-star" style="color:yellow;"></i>';
                                }
                            ?>
                        </span>

                        <hr>
                        
                        {{-- <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
                            <li class="active">
                                <a href="#mail-inbox.html">
                                    <i class="text-primary fa fa-inbox"></i> Inbox <span class="label pull-right">7</span>
                                </a>
                            </li>
                            <li>
                                <a href="#mail-compose.html"><i class="text-primary fa fa-envelope-o"></i> Send Mail</a>
                            </li>
                            <li>
                                <a href="#"><i class="text-primary fa fa-certificate"></i> Important</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="text-primary fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">35</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="text-primary fa fa-trash-o"></i> Trash</a>
                            </li>
                        </ul> --}}
                        <!-- /.nav -->

                        {{-- <h5 class="nav-email-subtitle">More</h5> --}}
                        {{-- <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
                            <li>
                                <a href="#">
                                    <i class="text-primary fa fa-folder-open"></i> Promotions <span class="label label-danger pull-right">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="text-primary fa fa-folder-open"></i> Job list
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="text-primary fa fa-folder-open"></i> Backup
                                </a>
                            </li>
                        </ul> --}}
                        <!-- /.nav -->
                    </div>

                    <div class="col-sm-9">
                        <!-- resumt -->
                        <div class="panel panel-default">
                            <div class="panel-headingg resume-heading">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-xs-12 col-sm-4">
                                            <figure>
                                                <div style="width: 270px; height:270px;">
                                                     <img class="img-circle img-responsive" alt="" src="{{ asset('storage/doctors/'.$doctor->image) }}" style="width:100%; height: 100%; border:5px solid #d9d9d9; padding: 10px;">
                                                </div>
                                            </figure>

                                            <div class="row">
                                                <div class="col-xs-12 social-btns" style="margin-left: 20%;">
                                                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                                        <a href="#" class="btn btn-social btn-block btn-google">
                                                            <i class="fab fa-google"></i> </a>
                                                    </div>
                                                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                                        <a href="#" class="btn btn-social btn-block btn-facebook">
                                                            <i class="fab fa-facebook-f"></i> </a>
                                                    </div>
                                                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                                        <a href="#" class="btn btn-social btn-block btn-twitter">
                                                            <i class="fab fa-twitter"></i> </a>
                                                    </div>
                                                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                                        <a href="#" class="btn btn-social btn-block btn-linkedin">
                                                            <i class="fab fa-linkedin-in"></i> </a>
                                                    </div>
                                                </div>
                                                {{-- Problem --}}
                                                <br>
                                                <div style="margin-top: 50px;">

                                                    {{-- Modal Enquiry --}}
                                                    
                                                    @include('partials.modal.enquiry')

                                                    {{-- End Modal Enquiry --}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-8">
                                            <ul class="list-group">
                                                <li class="list-group-item"><i class="text-primary fa fa-user-md"></i> {{ $doctor->ucwordsField($doctor->name) }}
                                                    <br>
                                                    <small style="font-style: italic; font-size: small;"><em class="text-warning">({{ $doctor->years_experience }} Years Of Experience)</em></small>
                                                </li>
                                                <li class="list-group-item"><i class="text-primary fa fa-user-md"></i> {{ $doctor->ucwordsField($doctor->descipline) }}</li>
                                                
                                                <li class="list-group-item"><i class="text-primary fas fa-user-graduate"></i>
                                                    @foreach (explode('.', $doctor->education) as $education)
                                                        <span id="edu_li">{{ $doctor->ucwordsField($education .', ')}}</span>
                                                    @endforeach

                                                </li>

                                                <li class="list-group-item"><i class="text-primary far fa-building"></i> {{ $doctor->department->name }} </li>
                                                <li class="list-group-item"><i class="text-primary fas fa-map-marker-alt"></i> {{ $doctor->location->city .', ' .$doctor->location->state}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--
                            <div> --}}
                                <div class="bs-callout bs-callout-danger">
                                    <h4><i class="text-primary fa fa-user-md"></i> About Doctor</h4>
                                    <p>
                                        {{ $doctor->about }}
                                    </p>
                                </div>

                                <div class="bs-callout bs-callout-danger">
                                    <h4><i class="text-primary far fa-hospital"></i> Hospital</h4>
                                    <p>
                                        {{ $doctor->hospital->name .', ' .$doctor->hospital->location->city .', ' .$doctor->hospital->location->state }}
                                    </p>
                                </div>

                                <div class="bs-callout bs-callout-danger">
                                    <h4><i class="text-primary fas fa-cogs"></i> Specialisation</h4>
                                    <ul class="list-group">
                                        @foreach ($doctor->specialities as $docSpecialities)
                                        <li class="list-group-item">
                                            <a href="#">{{ $docSpecialities->name }}</a>
                                            <span class="badge"><i class="fas fa-check"></i></span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="bs-callout bs-callout-danger">
                                    <h4><i class="text-primary far fa-address-card"></i> Work Experience</h4>
                                    <p>
                                        {{ $doctor->experience }}
                                    </p>
                                </div>

                                <div class="bs-callout bs-callout-danger">
                                    <h4><i class="text-primary fas fa-ribbon"></i> Awards</h4>
                                    <p>
                                        <ul class="list-group">
                                            @foreach (explode(".", $doctor->awards) as $award)
                                            <li class="list-group-item awards">
                                                {{ $doctor->ucwordsField($award) }}
                                                <span class="badge"><i class="fas fa-check"></i></span>
                                            </li>
                                            @endforeach
                                        </ul>

                                    </p>
                                </div>

                                <div class="bs-callout bs-callout-danger">
                                    <h4><i class="text-primary fa fa-stethoscope"></i> Treatment List</h4>
                                    <ul class="list-group">
                                        @foreach ($doctor->treatments as $docTreatment)
                                        <li class="list-group-item">
                                            <a href="{{ route('treatment.show', $docTreatment->slug) }}">{{ $docTreatment->name }}</a>
                                            <span class="badge"><i class="fas fa-check"></i></span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="bs-callout bs-callout-danger">
                                    <h4><i class="text-primary fa fa-user-graduate"></i> Education</h4>
                                    <ul class="list-group">
                                        @foreach (explode(".", $doctor->education) as $education)
                                        <li class="list-group-item edu">
                                            {{ $doctor->ucwordsField($education) }}
                                            <span class="badge"><i class="fas fa-check"></i></span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="bs-callout bs-callout-danger">
                                    <h4><i class="text-primary fas fa-map-marker-alt"></i> Location</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            {{ $doctor->location->city }},
                                            <br> {{ $doctor->location->state }},
                                            <br> {{ $doctor->location->country }}
                                        </li>
                                    </ul>
                                </div>
                                {{-- </div> --}}
                        </div>
                        <!-- resume -->
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        {{-- Show Other Doctors --}}
        <div class="container">
            <div class="well">
                <h1 class="text-primary">OTHER DOCTORS</h1>
            </div>
            <hr> @foreach ($otherDoctors as $otherDoctor)
            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-12 filter hdpe">
                        <div class="col-12-lg col-md-12 col-sm-12 col-xs-12">
                            <a href="{{ route('doctor.show', $otherDoctor->slug) }}"><h4 class="text-center">{{ $otherDoctor->name }}</h4></a>
                        </div>

                        <div class="col-xs-12">
                            <div>
                                <a href="{{ route('doctor.show', $otherDoctor->slug) }}"><img src="{{ asset('storage/doctors/'.$otherDoctor->image) }}" style="" class="img-thumbnail" alt="{{ $otherDoctor->name }}"></a>
                            </div>
                            <br>

                            <div class="text-center">
                                <strong>Years Of Experience: </strong><p class="label label-warning">{{ $otherDoctor->years_experience }}</p>
                            </div>
                            <br>
                            
                            <div>
                                <span class="btn btn-danger btn-block btn-compose-email"> <h3><i class="fas fa-award" style="color:yellow;"></i> AWARDS <i class="fas fa-award" style="color:yellow;"></i></h3>

                                    <?php $awardArray = explode('.', $otherDoctor->awards);
                                    echo '<h4>' .count($awardArray) .'</h4>';
                                        for ($i=0; $i < count($awardArray); $i++) { 
                                            echo '<i class="fas fa-star" style="color:yellow;"></i>';
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

        <div class="text-center">{{ $otherDoctors->links() }}</div>
        <br><hr><br>

        @include('partials.enquiry_form')

        @include('partials.copyright') @endsection @section('bottomjs')

        <script type="text/javascript" src="{{ asset('js/hospital.js') }}"></script>

        @stop