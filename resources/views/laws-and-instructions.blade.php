@extends('layouts.laws-and-instructions')

@section('page title')
Laws And Instructions
@endsection

@section('content')
<div class="container">
  <div class="row pt-3 pb-3">
    <div class="col-lg-12 col-md-12 text-md-start text-center pb-3">
      <h3 class="p-2 m-0 border-left-3">
        Laws & Instructions
      </h3>
    </div>
    <div class="col-lg-12 col-md-12 border rounded p-2">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Format</th>
            <th scope="col">Size</th>
            <th scope="col">Uploaded</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <a href="#" class="text-decoration-none">Law 01</a>
            </td>
            <td>
              PDF
            </td>
            <td>
              11.5 MB
            </td>
            <td>
              23.1.2023
            </td>
          </tr>
          <tr>
            <td>
              <a href="#" class="text-decoration-none">Instruction 01</a>
            </td>
            <td>
              PDF
            </td>
            <td>
              13.6 MB
            </td>
            <td>
              22.1.2023
            </td>
          </tr>
          <tr>
            <td>
              <a href="#" class="text-decoration-none">Instruction 02</a>
            </td>
            <td>
              PDF
            </td>
            <td>
              11.5 MB
            </td>
            <td>
              22.1.2023
            </td>
          </tr>
          <tr>
            <td>
              <a href="#" class="text-decoration-none">Law 02</a>
            </td>
            <td>
              PDF
            </td>
            <td>
              10 MB
            </td>
            <td>
              21.1.2023
            </td>
          </tr>
          <tr>
            <td>
              <a href="#" class="text-decoration-none">Law 03</a>
            </td>
            <td>
              PDF
            </td>
            <td>
              12 MB
            </td>
            <td>
              23.1.2023
            </td>
          </tr>
        </tbody>
      </table>
      <div class="col p-2">
        <nav aria-label="Page navigation example">
          <ul class="pagination animate justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">
                  <i class="fa-solid fa-circle-chevron-left"></i>
                </span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">
                  <i class="fa-solid fa-circle-chevron-right"></i>
                </span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection
