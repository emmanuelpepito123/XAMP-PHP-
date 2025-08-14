<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
    body {
      background: #f1f4f9;
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 0 40px rgba(0, 0, 0, 0.05);
      width: 100%;
      max-width: 500px;
    }

    .card-header {
      background-color: #0d6efd;
      border-top-left-radius: 1rem;
      border-top-right-radius: 1rem;
      padding: 1.05rem;
      text-align: center;
      color: white;
    }

    .card-header h5 {
      margin: 0;
      font-weight: 500;
    }

    .card-body {
      padding: 2rem;
    }

    .form-label {
      font-weight: 300;
      color: #333;
    }

    .form-control {
      border-radius: 0.5rem;
      height: 40px;
      font-size: 1rem;

    }

    .btn-submit {
      height: 45px;
      font-weight: 600;
      border-radius: 0.5rem;
      background: linear-gradient(135deg, #198754, #28c76f);
      border: none;
      transition: background 0.3s ease;
    }

    .btn-submit:hover {
      background: linear-gradient(135deg, #157347, #20b26a);
    }

  .btn-success:hover {
    background: linear-gradient(135deg, #218838, #57cc57);
  }

  @media (max-width: 768px) {
    .card-body {
      padding: 1.5rem;
    }
  }



    </style>
  </head>

  <body>
    

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4"> <!-- Small width -->
        <div class="card shadow-sm rounded-4">
          <div class="card-header bg-primary text-white text-center">
            <h5>Enter Two Numbers</h5>
          </div>
          <div class="card-body">
            <form action = "process.php" method="get">
              <div class="mb-3">
                <label for="firstNumber" class="form-label">First Number</label>
                <input type="number" class="form-control" id="firstNumber" placeholder="First number" name="num1" required>
              </div>

              <div class="mb-3">
                <label for="secondNumber" class="form-label">Second Number</label>
                <input type="number" class="form-control" id="secondNumber" placeholder="Second number" name="num2" required>
              </div>

              <button type="submit" class="btn btn-success w-100">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  </body>
</html>