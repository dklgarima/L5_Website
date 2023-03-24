<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HTML Recap</title>
</head>

<body>
    <div class="container">

        <div class="big-box image-box">
            <img src="./download.jpg" alt="technology image">
            <div class="topic">
                <span>W</span>eb <span>A</span>pplication <span>T</span>echnologies
            </div>
        </div>

        <div class="small-box red">
            <h2>Links</h2>
            <ul>
                <li><a href="http://chubkins.com/">Chubkins</a></li>
                <li><a href="https://www.w3schools.com/">W3 Schools</a></li>
                <li><a href="https://developer.mozilla.org/en-US/docs/Learn">Learn Web Dev</a></li>
                <li><a href="https://www.w3schools.com/colors/colors_names.asp">Colour Reference</a></li>
            </ul>
        </div>

        <div class="small-box yellow">
            <div class="title">WAT Lecture</div>
            <div class="sub-title"><em>7:00 - 9:00 LTB</em></div>
            <div class="content">Every <span>WED</span></div>
        </div>

        <div class="big-box green">
            <h2>WAT Assessment</h2>
            <table id="users-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Weight</th>
                        <th>Due</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Work in progress</td>
                        <td>20%</td>
                        <td>See VLE</td>
                    </tr>
                    <tr>
                        <td>Portfolio</td>
                        <td>50%</td>
                        <td>See VLE</td>
                    </tr>
                    <tr>
                        <td>Phase Exam</td>
                        <td>30%</td>
                        <td>See VLE</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="big-box lightgrey">
            <h2>Search for Property</h2>
            <form>
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" placeholder="e.g this or that"><br>

                <label for="category">Category</label>
                <select>
                    <option>Flat</option>
                    <option>House</option>
                    <option>Room</option>
                </select>
                <label for="beds">Beds:</label>
                <input type="number" value="4"><br>

                <input type="radio" id="price" value="Price" checked>
                <label for="price">Price</label>
                <input type="radio" id="beds" value="Beds">
                <label for="beds">Beds</label>
                <input type="radio" id="alpha" value="Alpha">
                <label for="alpha">Alpha</label><br>

                <button>Submit</button>
            </form>
        </div>
    </div>
</body>

</html>