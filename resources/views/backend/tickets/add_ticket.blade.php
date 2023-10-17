@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('index.ticket') }}" class="btn btn-primary"> Back </a>
            </ol>
        </nav>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ADD TICKET</h4>
                    {{-- <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="container">
                                <select class="btn btn-secondary dropdown-toggle" type="button" id="select-option"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    for="select-option">
                                    <option disabled selected>Select type:</option>
                                    <option name="type" value="Customer" class="dropdown-item-lg"
                                        onclick="toggleForm('customer')">
                                        Customer
                                    </option>
                                    <option name="type" value="Organization" class="dropdown-item-lg"
                                        onclick="toggleForm('organization')">
                                        Organization
                                    </option>
                                </select>

                            </div>

                            <br>
                            <div class="radio-container">
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="radioInline" id="radioInline"
                                            value="radio1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <form action="{{ route('store.ticket') }}" method="POST">
                        @csrf
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <input class="form-control" maxlength="100" name="requester" type="text"
                                            placeholder="Requester Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="dropdown">
                                <select class="form-control btn btn-secondary dropdown-toggle" name="status" type="button"
                                    id="status" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option disabled selected>Status:</option>
                                    <option value="new" class="dropdown-item-lg warning">New</option>
                                    <option value="open" class="dropdown-item-lg">Open</option>
                                    <option value="pending" class="dropdown-item-lg">Pending</option>
                                    <option value="solved" class="dropdown-item-lg">Solved</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="dropdown">
                                <select class="form-control btn btn-secondary dropdown-toggle" name="service_type"
                                    type="button" id="service_type" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <option disabled selected>Select service:</option>
                                    <option value="repair" class="dropdown-item-lg">Repair</option>
                                    <option value="maintenance" class="dropdown-item-lg">Maintenance</option>
                                    <option value="installation" class="dropdown-item-lg">Installation</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">DESCRIPTION</h4>
                                        <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="dropdown">
                                <select class="form-control btn btn-secondary dropdown-toggle" name="priority"
                                    type="button" id="priority" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <option disabled selected>Priority:</option>
                                    <option value="low" class="dropdown-item-lg">Low</option>
                                    <option value="normal" class="dropdown-item-lg">Normal</option>
                                    <option value="high" class="dropdown-item-lg">High</option>
                                    <option value="urgent" class="dropdown-item-lg">Urgent</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="right">
                            <button type="submit" class="btn btn-primary me-2"> Submit </button>
                        </div>
                    </form>
                    {{-- <form method="POST" action="{{ route('store.ticket') }}" class="forms-sample">
                        <!-- repair -->
                        <div id="repair" class="repair">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <!-- Location -->
                                        <h3>Location</h3>
                                        <select name="locations" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button" onchange="otherLocation(this)">
                                            <option value="location" disabled selected>Select a location:</option>
                                            <option value="manila">Manila</option>
                                            <option value="quezon-city">Quezon City</option>
                                            <option value="caloocan-city">Caloon City</option>
                                            <option value="las-piñas-city">las Piñas City</option>
                                            <option value="makati-city">Makati City</option>
                                            <option value="malabon-city">Malabon City</option>
                                            <option value="mandaluyong-city">Mandaluyong City</option>
                                            <option value="marikina-city">Marikina City</option>
                                            <option value="muntinlupa-city">Muntinlupa City</option>
                                            <option value="navotas-city">Navotas City</option>
                                            <option value="parañaque-city">Parañaque City</option>
                                            <option value="pasay-city">Pasay City</option>
                                            <option value="pasig-city">Pasig City</option>
                                            <option value="san-juan-city">San Juan City</option>
                                            <option value="taguig-city">Taguig City</option>
                                            <option value="valenzuela-city">Valenzuela City</option>
                                            <option value="pateros">Pateros</option>
                                            <option value="other">Other</option>
                                        </select>

                                        <input type="text" id="otherLocationInput" placeholder="Other Location"
                                            style="display: none;">
                                    </div>

                                    <!-- Property type -->
                                    <div class="col">
                                        <h3>Property Type</h3>
                                        <select name="property-type" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button" onchange="otherPropertyType(this)">
                                            <option value="property-type" disabled selected>Select a property type:
                                            </option>
                                            <option value="condo">Condo</option>
                                            <option value="townhouse">Townhouse</option>
                                            <option value="apartment">Apartment</option>
                                            <option value="house">House</option>
                                            <option value="other">Other</option>
                                        </select>

                                        <input type="text" id="otherPropTypeInput" placeholder="Other Property Type"
                                            style="display: none;">
                                    </div>

                                    <!-- Date -->
                                    <div class="col">
                                        <h3>Date</h3>
                                        <input type="date" class=" btn btn-secondary">
                                    </div>
                                </div>
                            </div>
                            <hr>


                            <div class="container">
                                <div class="row row-cols-2">
                                    <!-- Air condition type -->
                                    <div class="col">
                                        <h3>Air Condition Type</h3>
                                        <select name="aircondition-type" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button">
                                            <option value="aircondition-type" disabled selected>Select air condition type:
                                            </option>
                                            <option value="window">Window</option>
                                            <option value="split">Split</option>
                                            <option value="tower">Tower</option>
                                            <option value="cassette">Cassette</option>
                                            <option value="suspended">Suspended</option>
                                            <option value="concealed">Concealed</option>
                                        </select>
                                    </div>
                                    <!-- Technology -->
                                    <div class="col">
                                        <h3>Technology</h3>
                                        <select name="technology-type" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button" onchange="otherTechnologyType(this)">
                                            <option value="technology-type" disabled selected>Select technology type:
                                            </option>
                                            <option value="window">Window</option>
                                            <option value="split">Split</option>
                                            <option value="inverter">Inventer</option>
                                            <option value="non-inventer">Non-Inventer</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <input type="text" id="otherTechTypeInput" placeholder="Other Technology"
                                            style="display: none;">
                                    </div>

                                    <!-- Brand -->
                                    <div class="col">
                                        <h3>Brand</h3>
                                        <select name="brands" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button">
                                            <option value="brands" disabled selected>Select brands:</option>
                                            <option value="hitachi">Hitachi</option>
                                            <option value="mitsubishi">Mitsubishi</option>
                                            <option value="koppel">Koppel</option>
                                            <option value="frost">Frost</option>
                                            <option value="carrier">Carrier</option>
                                            <option value="panasonic">Panasonic</option>
                                            <option value="lg">Clogged or Dirty Filters</option>
                                            <option value="midea">Midea</option>
                                            <option value="gree">Gree</option>
                                            <option value="airetech">Airetech</option>
                                            <option value="daikin">Daikin</option>
                                            <option value="ox">Ox</option>
                                        </select>
                                    </div>
                                    <!-- Problem -->
                                    <div class="col">
                                        <h3>Unit Problem</h3>
                                        <select name="unit-problem" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button" onchange="otherUnitProblem(this)">
                                            <option value="unit-problem" disabled selected>Select unit problem:</option>
                                            <option value="cooling">Insufficient Cooling</option>
                                            <option value="airflow">Airflow Issues</option>
                                            <option value="noises">Odd Noises</option>
                                            <option value="leak">Leaking Water</option>
                                            <option value="frozen">Frozen Evaporator</option>
                                            <option value="thermostat">Thermostat Problem</option>
                                            <option value="filters">Clogged or Dirty Filters</option>
                                            <option value="leak2">Refrigerant Leaks</option>
                                            <option value="electrical">Electrical Issues</option>
                                            <option value="power">AC won't Turn On</option>
                                            <option value="rapid-cycling">Rapid On-and-Off cycling of the AC system
                                            </option>
                                            <option value="other">Other</option>
                                        </select>
                                        <input type="text" id="otherUnitProbInput" placeholder="Other Unit Problem"
                                            style="display: none;">
                                    </div>
                                    <!-- Number of units -->
                                    <div class="col">
                                        <h3>No. of Units</h3>
                                        <p><span id="unitCount">0</span></p>
                                        <button type="button" class="btn btn-primary btn-icon" id="increaseCount">
                                            <i data-feather="plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-icon" id="decreaseCount">
                                            <i data-feather="minus"></i>
                                        </button>
                                    </div>
                                    <!-- Warranty status -->
                                    <div class="col">
                                        <h3>Warranty Status</h3>
                                        <input type="radio" class="btn-check" name="options" id="option1">
                                        <label type=" btn-inverse-primary" class="btn btn-primary" for="option1"
                                            id="out-of-warranty">
                                            Out-of-Warranty
                                        </label>
                                        <input type="radio" class="btn-check" name="options" id="option2">
                                        <label type=" btn-inverse-primary" class="btn btn-primary" for="option2"
                                            id="in-warranty">
                                            In-Warranty
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> --}}
                    {{-- <div id="maintenance" class="maintenance">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <!-- Location -->
                                        <h3>Location</h3>
                                        <select name="locations" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button" onchange="otherLocation(this)">
                                            <option value="location" disabled selected>Select a location:</option>
                                            <option value="manila">Manila</option>
                                            <option value="quezon-city">Quezon City</option>
                                            <option value="caloocan-city">Caloon City</option>
                                            <option value="las-piñas-city">las Piñas City</option>
                                            <option value="makati-city">Makati City</option>
                                            <option value="malabon-city">Malabon City</option>
                                            <option value="mandaluyong-city">Mandaluyong City</option>
                                            <option value="marikina-city">Marikina City</option>
                                            <option value="muntinlupa-city">Muntinlupa City</option>
                                            <option value="navotas-city">Navotas City</option>
                                            <option value="parañaque-city">Parañaque City</option>
                                            <option value="pasay-city">Pasay City</option>
                                            <option value="pasig-city">Pasig City</option>
                                            <option value="san-juan-city">San Juan City</option>
                                            <option value="taguig-city">Taguig City</option>
                                            <option value="valenzuela-city">Valenzuela City</option>
                                            <option value="pateros">Pateros</option>
                                            <option value="other">Other</option>
                                        </select>

                                        <input type="text" id="otherLocationInput" placeholder="Other Location"
                                            style="display: none;">
                                    </div>

                                    <!-- Property type -->
                                    <div class="col">
                                        <h3>Property Type</h3>
                                        <select name="property-type" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button" onchange="otherPropertyType(this)">
                                            <option value="property-type" disabled selected>Select a property type:
                                            </option>
                                            <option value="condo">Condo</option>
                                            <option value="townhouse">Townhouse</option>
                                            <option value="apartment">Apartment</option>
                                            <option value="house">House</option>
                                            <option value="other">Other</option>
                                        </select>

                                        <input type="text" id="otherPropTypeInput" placeholder="Other Property Type"
                                            style="display: none;">
                                    </div>

                                    <!-- Date -->
                                    <div class="col">
                                        <h3>Date</h3>
                                        <input type="date" class=" btn btn-secondary">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <br><br>

                            <div class="container">
                                <div class="row row-cols-2">
                                    <!-- Air condition type -->
                                    <div class="col">
                                        <h3>Air Condition Type</h3>
                                        <select name="aircondition-type" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button">
                                            <option value="aircondition-type" disabled selected>Select air condition type:
                                            </option>
                                            <option value="window">Window</option>
                                            <option value="split">Split</option>
                                            <option value="tower">Tower</option>
                                            <option value="cassette">Cassette</option>
                                            <option value="suspended">Suspended</option>
                                            <option value="concealed">Concealed</option>
                                        </select>
                                    </div>
                                    <!-- Technology -->
                                    <div class="col">
                                        <h3>Technology</h3>
                                        <select name="technology-type" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button" onchange="otherTechnologyType(this)">
                                            <option value="technology-type" disabled selected>Select technology type:
                                            </option>
                                            <option value="window">Window</option>
                                            <option value="split">Split</option>
                                            <option value="inverter">Inventer</option>
                                            <option value="non-inventer">Non-Inventer</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <input type="text" id="otherTechTypeInput" placeholder="Other Technology"
                                            style="display: none;">
                                    </div>

                                    <!-- Brand -->
                                    <div class="col">
                                        <h3>Brand</h3>
                                        <select name="brands" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button">
                                            <option value="brands" disabled selected>Select brands:</option>
                                            <option value="hitachi">Hitachi</option>
                                            <option value="mitsubishi">Mitsubishi</option>
                                            <option value="koppel">Koppel</option>
                                            <option value="frost">Frost</option>
                                            <option value="carrier">Carrier</option>
                                            <option value="panasonic">Panasonic</option>
                                            <option value="lg">Clogged or Dirty Filters</option>
                                            <option value="midea">Midea</option>
                                            <option value="gree">Gree</option>
                                            <option value="airetech">Airetech</option>
                                            <option value="daikin">Daikin</option>
                                            <option value="ox">Ox</option>
                                        </select>
                                    </div>
                                    <!-- Problem -->
                                    <div class="col">
                                        <h3>Unit Problem</h3>
                                        <select name="unit-problem" id="dropdownMenuButton"
                                            class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" type="button" onchange="otherUnitProblem(this)">
                                            <option value="unit-problem" disabled selected>Select unit problem:</option>
                                            <option value="cooling">Insufficient Cooling</option>
                                            <option value="airflow">Airflow Issues</option>
                                            <option value="noises">Odd Noises</option>
                                            <option value="leak">Leaking Water</option>
                                            <option value="frozen">Frozen Evaporator</option>
                                            <option value="thermostat">Thermostat Problem</option>
                                            <option value="filters">Clogged or Dirty Filters</option>
                                            <option value="leak2">Refrigerant Leaks</option>
                                            <option value="electrical">Electrical Issues</option>
                                            <option value="power">AC won't Turn On</option>
                                            <option value="rapid-cycling">Rapid On-and-Off cycling of the AC system
                                            </option>
                                            <option value="other">Other</option>
                                        </select>
                                        <input type="text" id="otherUnitProbInput" placeholder="Other Unit Problem"
                                            style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>  --}}
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
