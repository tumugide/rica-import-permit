<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RICA IMPORT PERMIT FORM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="container mx-auto my-5">
        @if ($errors->any())
            <span>Validation errors: {{$errors}}</span>
        @endif

        <div>
            <form action="/submit" method="POST">
                @csrf
            <x-card title="Business Owner Details">
                <div>
                    <x-block header="Business Owner Details">
                        <x-select placeh="Select Citizenship" label="Applicant Citizenship *" :items="['Rwandan', 'Foreigner']"
                            :req="true" name="citizenship" />
                        <x-text-input label="Identification Document Number *"
                            placeh="Enter Identification document number" type="number" :req="true"
                            name="id_number" />
                        <!-- :req="true" if displayed -->
                        <x-text-input label="Passport Number *" placeh="Enter passport number" :req="true"
                            name="passport_number" />
                        <!-- req if displayed -->
                        <div class="grid grid-cols-2 gap-5 w-max">
                            <x-text-input label="Other Names *" placeh="Enter Names" :req="true"
                                name="other_names" />
                            <x-text-input label="Surname *" placeh="Enter Surname" :req="true" name="surname" />
                        </div>
                        <x-text-input label="Nationality*" placeh="Enter Nationality" name="nationality" />
                        <!-- Replace with location widget -->
                        <div class="grid grid-cols-2 gap-5 w-max">
                            <x-phone label="Phone number" name="owner_phone" type="tel" />
                            <x-text-input label="Email address" placeh="Enter email address" name="owner_email"
                                type="email" />
                        </div>
                    </x-block>
                    <x-block header="Business Owner Address">
                        <x-text-input placeh="Enter District" label="Location *" :req="true"
                            name="owner_address" />
                    </x-block>
                </div>
            </x-card>
            <x-card title="Business Details">
                <x-block header="Business Details">
                    <x-select placeh="Select business type" label="Business type *" :items="['Retailer', 'Wholesale', 'Manufacturer']" :req="true"
                        name="business_type" />
                    <x-text-input label="Company name *" placeh="Enter Company name" :req="true"
                        name="company_name" />
                    <x-text-input label="TIN number *" placeh="Enter TIN Number" :req="true" name="tin_number"
                        type="number" />
                    <!-- 9 digits minimum -->
                    <x-date label="Registration Date" placeh="Select Date" name="reg_date" />
                </x-block>
                <x-block header="Business Address">
                    <x-text-input placeh="Enter District" label="Location *" :req="true"
                        name="business_address" />
                </x-block>
            </x-card>

            <x-card title="Product Information">
                <x-block header="Importation details">
                    <x-select placeh="Select purpose of importation" label="Purpose of importation *" :items="['Direct sale', 'Personal use', 'Trial use', 'Other']"
                        :req="true" name="import_purpose" />
                    <x-text-input label="Specify purpose of importation *" placeh="Enter specific purpose of importation"
                        :req="true" name="specific_purpose" />
                    <!-- Displayed when other is selected -->
                </x-block>
                <x-block header="Product Details">
                    <x-select label="Product Category *" placeh="Select product category" :items="['General purpose', 'Construction materials', 'Chemicals']"
                        :req="true" name="product_category" />
                    <x-text-input label="Product name *" placeh="Enter product name" :req="true"
                        name="product_name" />
                    <x-text-input label="Weight(Kg)" placeh="Enter weight" name="weight" type="number" />
                    <x-text-area label="Description of product *" placeh="Enter product description" :req="true"
                        name="product_description" />
                    <x-select label="Unit of measurement" placeh="Enter unit of measurement" :items="['Kgs', 'Tonnes']"
                        name="product_unit" />
                    <x-text-input label="Quantity of product(s) *" placeh="Enter quantity" :req="true"
                        name="product_quantity" type="number" /> <!-- Greater than zero -->

                </x-block>
            </x-card>
            <x-button label="Submit" />
            </form>
        </div>
    </section>

</body>

</html>
