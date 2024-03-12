<!-- resources/views/emails/data.blade.php -->

<h2>Form Data</h2>

<table>
    <tr>
        <th>Field</th>
        <th>Information</th>
    </tr>
    <tr>
        <td>Citizenship</td>
        <td>{{ $data['citizenship'] }}</td>
    </tr>
    <tr>
        <td>ID Number</td>
        <td>{{ $data['id_number'] }}</td>
    </tr>
    <tr>
        <td>Passport number</td>
        <td>{{ $data['passport_number'] }}</td>
    </tr>
    <tr>
        <td>Other names</td>
        <td>{{ $data['other_names'] }}</td>
    </tr>
    <tr>
        <td>Surnames</td>
        <td>{{ $data['surname'] }}</td>
    </tr>
    <tr>
        <td>Nationality</td>
        <td>{{ $data['nationality'] }}</td>
    </tr>
    <tr>
        <td>Owner Phone</td>
        <td>{{ $data['owner_phone'] }}</td>
    </tr>
    <tr>
        <td>Owner Email</td>
        <td>{{ $data['owner_email'] }}</td>
    </tr>

    <tr>
        <td>Owner Address</td>
        <td>{{ $data['owner_address'] }}</td>
    </tr>
    <tr>
        <td>Business Type</td>
        <td>{{ $data['business_type'] }}</td>
    </tr>
    <tr>
        <td>Company Name</td>
        <td>{{ $data['company_name'] }}</td>
    </tr>
    <tr>
        <td>TIN Number</td>
        <td>{{ $data['tin_number'] }}</td>
    </tr>
    <tr>
        <td>Registration Date</td>
        <td>{{ $data['reg_date'] }}</td>
    </tr>
    <tr>
        <td>Business Address</td>
        <td>{{ $data['business_address'] }}</td>
    </tr>
    <tr>
        <td>Import Purpose</td>
        <td>{{ $data['import_purpose'] }}</td>
    </tr>
    <tr>
        <td>Specific Purpose</td>
        <td>{{ $data['specific_purpose'] }}</td>
    </tr>
    <tr>
        <td>Product Name</td>
        <td>{{ $data['product_name'] }}</td>
    </tr>
    <tr>
        <td>Product Category</td>
        <td>{{ $data['product_category'] }}</td>
    </tr>
    <tr>
        <td>Weight</td>
        <td>{{ $data['weight'] }}</td>
    </tr>
    <tr>
        <td>Product Description</td>
        <td>{{ $data['product_description'] }}</td>
    </tr>
    <tr>
        <td>Product Unit</td>
        <td>{{ $data['product_unit'] }}</td>
    </tr>
    <tr>
        <td>Product Quantity</td>
        <td>{{ $data['product_quantity'] }}</td>
    </tr>


</table>
