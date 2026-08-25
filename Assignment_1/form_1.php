<?php
include('layout_1/header_1.php');
?>

<!-- ********************Age*****************task1****************************************** -->

<form action="index_1.php" method="POST" class="w-75 m-auto mt-3">

  <div class="mb-3">
    <label class="form-label">Age</label>
    <input type="number" name="age" class="form-control">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" name="check" class="form-check-input">
    <label class="form-check-label">Check me out</label>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">
    Submit
  </button>

</form>

<!-- ********************Calculate*****************task2****************************************** -->

<form action="index_1.php" method="POST" class="w-75 m-auto mt-3">

  <div class="mb-3">
    <label class="form-label">num1</label>
    <input type="number" name="num1" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">num2</label>
    <input type="number" name="num2" class="form-control">
  </div>

  <button type="submit" name="calculate" class="btn btn-primary">
    calculate
  </button>

</form>

<!-- ********************Sum of array*****************task3****************************************** -->



<!-- *******************Search for film****************task4****************************************** -->

<form action="index_1.php" method="POST" class="w-75 m-auto mt-3">

  <div class="mb-3">
    <label class="form-label"> Enter the film</label>
    <input type="text" name="film" class="form-control">
  </div>


  <button type="submit" name="submit" class="btn btn-primary">
    Submit
  </button>

</form>

<!-- *********************Bubble Sort*****************task5****************************************** -->


<!-- ****************The max of array*****************task6****************************************** -->


<!-- ***************The recurring film is**************task7****************************************** -->



<!-- ***********************RouteRandomPass*************task8****************************************** -->


<!-- **********************For,While********************task9****************************************** -->


<!-- ***********************Sorting********************task10****************************************** -->


<!-- ************************Same values***************task11****************************************** -->


<!-- ********************Form "get , post***************task12****************************************** -->

<form action="index_1.php" method="POST" class="w-75 m-auto mt-3">

  <div class="mb-3">
    <label class="form-label">Product Price:</label>
    <input type="text" name=">Price" class="form-control">
  </div>


 <div class="mb-3">
    <label class="form-label">Quantity:</label>
    <input type="text" name=">Quantity" class="form-control">
</div>

  <button type="submit" name="Calculate" class="btn btn-primary">
    Submit
  </button>

</form>


<?php
include('layout_1/footer_1.php');
?>