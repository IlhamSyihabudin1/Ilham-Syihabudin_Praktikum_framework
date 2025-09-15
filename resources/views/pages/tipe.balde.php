@extends('layout.app')

@section('content')
<div class="table-container">
    <h2>Data Stock Mobil</h2>
    <table>
        <thead>
            <tr>
                <th>Tipe Mobil</th>
                <th>Harga (Estimasi)</th>
                <th>Status Stock</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>All New Ertiga</td>
                <td>Rp 250.000.000</td>
                <td>Tersedia</td>
            </tr>
            <tr>
                <td>Karimun Wagon R</td>
                <td>Rp 150.000.000</td>
                <td>Tersedia</td>
            </tr>
            <tr>
                <td>Ignis</td>
                <td>Rp 212.000.000</td>
                <td>Terbatas</td>
            </tr>
             <tr>
                <td>New Carry Pick Up</td>
                <td>Rp 166.000.000</td>
                <td>Tersedia</td>
            </tr>
             <tr>
                <td>Jimny</td>
                <td>Rp 443.000.000</td>
                <td>Indent</td>
            </tr>
        </tbody>
    </table>
    <button class="edit-btn">Hubungi Dealer</button>
</div>
@endsection