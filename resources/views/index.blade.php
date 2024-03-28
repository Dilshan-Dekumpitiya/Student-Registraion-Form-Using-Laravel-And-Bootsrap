<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student Details</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    
    </head>
    <body>
        <div class="row">
            <div class="col-6 studentAdd">
                <h1>Student Add</h1>
                <form action="">
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Student Name</label>
                        <input type="email" class="form-control" id="studentName" name="studentName" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="studentDOB" class="form-label">Student DOB</label>
                        <input type="date" class="form-control" id="studentDOB" name="studentDOB" placeholder="Date of Birth">
                    </div>

                    <input type="submit" class="btn btn-success" value="Add Student">
                </form>
                
            </div>
            
            <div class="col-6">

            </div>
            
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
