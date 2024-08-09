@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-30 fw-bold text-uppercase text-purple">STUDENT TIME MANAGEMENT
         </h1>
         <p class="font-18 fw-500 text-purple">ADD YOUR DETAILS <b>JANUARY 2024</b>
         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="row justify-content-end">
            <div class="col-lg-3 col-sm-5 col-8 text-end pb-lg-0 pb-2">
               <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
               <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
            </div>
         </div>
         <div class="table-responsive  ">
            <table   class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-12">
                  <th>Date / Time </th>
                  <th>0</th>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                  <th>6</th>
                  <th>7</th>
                  <th>8</th>
                  <th>9</th>
                  <th>10</th>
                  <th>11</th>
                  <th>12</th>
                  <th>13</th>
                  <th>14</th>
                  <th>15</th>
                  <th>17</th>
                  <th>18</th>
                  <th>19</th>
                  <th>20</th>
                  <th>21</th>
                  <th>22</th>
                  <th>23</th>
                  <th>24</th>
                  <th>25</th>
                  <th>26</th>
                  <th>27</th>
                  <th>28</th>
                  <th>29</th>
                  <th>30</th>
                  <th>31</th>
                  </tr>
               </thead>
               <tbody >
                  <tr class="font-12 fw-bolder">
                     <td >01.01.2023 </td>
                     <td><i class="fa-solid fa-circle fs-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                     <td><i class="fa-solid fa-circle fs-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                     <td>23</td>
                     <td>24</td>
                     <td>25</td>
                     <td>26</td>
                     <td><i class="fa-solid fa-circle fs-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6"></i></td>
                     <td><i class="fa-solid fa-circle fs-6"></i></td>
                     <td>30</td>
                     <td>31</td>
                  </tr>
                  <tr class="font-12 fw-bolder">
                    <td >01.01.2023 </td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td>30</td>
                    <td>31</td>
                 </tr>
                 <tr class="font-12 fw-bolder">
                    <td >01.01.2023 </td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td>30</td>
                    <td>31</td>
                 </tr>
                 <tr class="font-12 fw-bolder">
                    <td >01.01.2023 </td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td>30</td>
                    <td>31</td>
                 </tr>
                 <tr class="font-12 fw-bolder">
                    <td >01.01.2023 </td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td>30</td>
                    <td>31</td>
                 </tr>
                 <tr class="font-12 fw-bolder">
                    <td >01.01.2023 </td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td>30</td>
                    <td>31</td>
                 </tr>    <tr class="font-12 fw-bolder">
                    <td >01.01.2023 </td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-1"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-2"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-3"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-4"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-5"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6 cricle-7"></i></td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td><i class="fa-solid fa-circle fs-6"></i></td>
                    <td>30</td>
                    <td>31</td>
                 </tr>
               </tbody>
            </table>
        </div>
      </div>

      <div class="col-12  mt-4">
        <ul class="font-12 rounded-3 fw-bolder bg-white border-1 py-3 px-2  text-purple d-lg-flex justify-content-center">
            <li class="ps-2 pe-3"><i class="fa-solid fa-circle fs-6 cricle-1 me-2"></i> SELF STUDIES </li>
            <li class="ps-2 pe-3"><i class="fa-solid fa-circle fs-6 cricle-2 me-2"></i> SCHOOL </li>
            <li class="ps-2 pe-3"><i class="fa-solid fa-circle fs-6 cricle-3 me-2"></i> TUTION CLASSES </li>
            <li class="ps-2 pe-3" ><i class="fa-solid fa-circle fs-6 cricle-4 me-2"></i> EXTRA ACTIVITIES </li>
            <li class="ps-2 pe-3"><i class="fa-solid fa-circle fs-6 cricle-5 me-2"></i> SPORTS / EXCERCISE </li>
            <li class="ps-2 pe-3"><i class="fa-solid fa-circle fs-6 cricle-6 me-2"></i> SLEEPING </li>
            <li class="ps-2 pe-3"><i class="fa-solid fa-circle fs-6 cricle-7 me-2"></i> FREE TIME </li>
        </ul>
      </div>
   </div>
</div>
 
@endsection