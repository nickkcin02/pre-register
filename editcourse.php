<?php
include 'nav-bar.php';
?>
<!doctype html>
<html lang="en">
<head>
    <style>
        body {
            font-family: "Montserrat", sans-serif;
        }
        .dashbox1 {
            background-color: #233975;
            border: none;
            border-radius: 50px;
            box-shadow: 0 0 20px #868686;
            padding: 30px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: 49% 49%;
            grid-gap: 2%;
        }
        .grid-container>div {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 15px;
            height: 320px;
        }
        body h1 {
            color: #ffffff;
            font-weight: 700;
            font-size: 30px;
        }
        .textinsecbox {
            color: #ffffff;
            font-weight: 500;
            display: inline-block;
            float: left;
            margin-right: 10px;
        }
        .displayinsecbox {
            border: 2px solid #ffffff;
            border-radius: 12px;
            height: 24px;
            width: 100px;
            overflow: hidden;
            color: #ffffff;
            font-size: 15px;
            padding-left: 5px;
            padding-bottom: 6px;
        }
        .monday {
            border: 2px solid #FEC812;
            color: #FEC812;
        }
        .tuesday {
            border: 2px solid #E98699;
            color: #E98699;
        }
        .wednesday {
            border: 2px solid #1A9776;
            color: #1A9776;
        }
        .thursday {
            border: 2px solid #EB9E33;
            color: #EB9E33;
        }
        .friday {
            border: 2px solid #5AC7EF;
            color: #5AC7EF;
        }
        .saturday {
            border: 2px solid #7B3AB2;
            color: #7B3AB2;
        }
        .inputinsecbox {
            border: 2px solid #ffffff;
            border-radius: 12px;
            height: 24px;
            width: 100px;
            overflow: hidden;
            color: #000000;
            padding-left: 5px;
        }
        .linesecbox {
            margin-bottom: 5px;
        }
        /* .backbtn {
            transition-duration: 0.3s;
            cursor: pointer;
        }

        .backbtn:hover {
            background-color: #D4DEFA;
            } */
        </style>
    </head>

    <body>

        <div class="horizontal_container col-12" id="test">
            <h1 style='margin-left: 2%; margin-top: 2%; color: #233975; font-weight: 700;'>Edit Course & Sections Information</h1>
        </div>
        <div class="row" style="margin-left: 5%; margin-right: 5%; margin-top: 3%;">
            <div class="col-12">
                <div class="col-12 dashbox1" style="padding: 15px; height: 650px;">
                    <div class="row">
                        <div class="col-12" style="position: absolute; top: 30px;">
                            <div class="row" id="courseid" style="background-color: #ffffff; border-top-right-radius: 40px; border-bottom-right-radius: 40px; position: relative; top: 20px; left: 0px; height: 80px; width: 1200px;">
                                <h2 class="edittitle col-3" style="font-size: 60px; font-weight: 700; color: #233975;
                                padding: 5px 0 0 20px">CPE100</h2>
                                <h2 class="edittitle col-9" style="font-size: 30px; font-weight: 700; color: #233975;
                                padding: 5px 0 0 20px; float: right; display: inline-block; text-align: right; position: absolute; top: 15px; right: 40px;">Computer Programming for Engineers</h2>
                            </div>
                        </div>
                        <div class="col-5" style="position: absolute; top: 110px;">
                            <div class="col-11" style="height: 300px; background-color: rgba(255, 255, 255, 0.5); border-radius: 30px; position: absolute; top: 50px; left: 30px;">
                                <h1 style="position: absolute; top: 15px; left: 20px;">Course Details</h1>
                                <textarea style="width: 453px; height: 225px; border-radius: 15px; border: none; resize: none; position: absolute; bottom: 15px; padding-left: 10px; padding-right: 10px;"></textarea>
                            </div>
                            <div class="col-11" style="height: 140px; background-color: rgba(255, 255, 255, 0.5); border-radius: 30px; position: absolute; top: 370px; left: 30px;">
                            </div>
                            <div style="height: 460px; width: 5px; border-radius: 3px; background-color: rgba(255, 255, 255, 0.5); position: absolute; top: 50px; left: 532px;"></div>
                        </div>
                        <div class="col-7" style="position: absolute; top: 110px; right: 0px;">
                            <div class="col-11" style="height: 460px; background-color: rgba(255, 255, 255, 0.5); border-radius: 30px; position: absolute; top: 50px; left: 30px;">
                                <h1 style="position: absolute; top: 15px; left: 20px;">Sections</h1>
                                <div style="position: absolute; top: 60px; height: 385px; width: 646px; border-radius: 15px; overflow-y: scroll; overflow-x: hidden;">
                                    <div class="grid-container" style="width: 100%">
                                        <div>
                                            <div style="background-color: #233975; height: 30px; border-top-left-radius: 15px; border-bottom-left-radius: 15px; position: relative; top: 5px; left: 5px; width: 100px; color: #ffffff; font-size: 20px; font-weight: 600; padding-left: 15px;">SEC 1</div>
                                            <div style="background-color: #233975; height: 30px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; position: relative; top: -25px; left: 107px; width: 170px; color: #ffffff; font-size: 15px; font-weight: 400; padding-left: 8px; padding-top: 4px;">Capacity :
                                                <div style="background-color: #233975; border-radius: 12px; height: 24px; width: 80px; position: relative; top: -23px; right: -79px; text-align: left; color: #ffffff; padding-left: 10px; border: 2px solid #ffffff">50</div>
                                            </div>
                                            <!-- minus button -->
                                            <button class="dot" style="height: 30px; width: 30px; border-radius: 50%; background-color: rgba(255, 255, 255, 0.5); position: relative; left: 282px; top: -55px; border: none;">
                                                <div style="height: 5px; width: 20px; background-color: #585858; border-radius: 3px; position: relative; left: -1px; top: 1px;"></div>
                                            </button>
                                            <div class="row" style="position: relative; top: -40px; left: 15px;">
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">Class Type: </div>
                                                    <div class="displayinsecbox">Lecture</div>
                                                </div>
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">On every </div>
                                                    <div class="displayinsecbox monday">Monday</div>
                                                </div>
                                                <div class="col-12 linesecbox" style="overflow: hidden;">
                                                    <div class="textinsecbox">From </div>
                                                    <div class="displayinsecbox" style="width: 90px; float: left;">08:30 AM</div>
                                                    <div class="textinsecbox" style="margin-left: 10px;">to </div>
                                                    <div class="displayinsecbox" style="width: 90px; float: left;">12:20 PM</div>
                                                </div>
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">At </div>
                                                    <div class="displayinsecbox">CPE1115</div>
                                                </div>
                                                <div style="height: 3px; width: 287px; margin-left: 15px; margin-top: 10px; background-color: #ffffff; border-radius: 1.5px"></div>
                                            </div>
                                            <div class="row" style="position: relative; top: -25px; left: 15px;">
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">Class Type: </div>
                                                    <div class="displayinsecbox">Lecture</div>
                                                </div>
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">On every </div>
                                                    <div class="displayinsecbox monday">Monday</div>
                                                </div>
                                                <div class="col-12 linesecbox" style="overflow: hidden;">
                                                    <div class="textinsecbox">From </div>
                                                    <div class="displayinsecbox" style="width: 90px; float: left;">08:30 AM</div>
                                                    <div class="textinsecbox" style="margin-left: 10px;">to </div>
                                                    <div class="displayinsecbox" style="width: 90px; float: left;">12:20 PM</div>
                                                </div>
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">At </div>
                                                    <div class="displayinsecbox">CPE1115</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div style="background-color: #DB7600; height: 30px; border-top-left-radius: 15px; border-bottom-left-radius: 15px; position: relative; top: 5px; left: 5px; width: 100px; color: #ffffff; font-size: 20px; font-weight: 600; padding-left: 15px;">SEC 2</div>
                                            <div style="background-color: #233975; height: 30px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; position: relative; top: -25px; left: 107px; width: 170px; color: #ffffff; font-size: 15px; font-weight: 400; padding-left: 8px; padding-top: 4px;">Capacity :
                                                <input style="border-radius: 12px; height: 24px; width: 80px; position: relative; top: -1px; right: -3px; text-align: left; color: #000000; padding-left: 10px; border: none;">
                                            </div>
                                            <!-- minus button -->
                                            <button class="dot" style="height: 30px; width: 30px; border-radius: 50%; background-color: rgba(255, 255, 255, 0.5); position: relative; left: 282px; top: -55px; border: none;">
                                                <div style="height: 5px; width: 20px; background-color: #585858; border-radius: 3px; position: relative; left: -1px; top: 1px;"></div>
                                            </button>
                                            <div class="row" style="position: relative; top: -40px; left: 15px;">
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">Class Type: </div>
                                                    <input class="inputinsecbox" list="classType" name="classType">
                                                    <datalist id="classType">
                                                        <option value="Lecture">
                                                        <option value="Lab">
                                                        <option value="Lecture & Lab">
                                                    </datalist>
                                                </div>
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">On every </div>
                                                    <input class="inputinsecbox" list="days" name="day">
                                                    <datalist id="days">
                                                        <option value="Monday">
                                                        <option value="Tuesday">
                                                        <option value="Wednesday">
                                                        <option value="Thursday">
                                                        <option value="Friday">
                                                        <option value="Saturday">
                                                    </datalist>
                                                </div>
                                                <div class="col-12 linesecbox" style="overflow: hidden;">
                                                    <div class="textinsecbox">From </div>
                                                    <input class="inputinsecbox" style="width: 90px; float: left;">
                                                    <div class="textinsecbox" style="margin-left: 10px;">to </div>
                                                    <input class="inputinsecbox" style="width: 90px; float: left;">
                                                </div>
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">At </div>
                                                    <input class="inputinsecbox">
                                                </div>
                                                <div style="height: 3px; width: 287px; margin-left: 15px; margin-top: 10px; background-color: #ffffff; border-radius: 1.5px"></div>
                                            </div>
                                            <button style="border: none; background-color: rgba(255, 255, 255, 0); width: 30px; height: 30px; position: relative; left: 279px; top: -37px;">
                                                <img src="img/greycross.png" style="width: 15px; height: 15px; position: relative; top: 0px; left: 0px;">
                                            </button>
                                            <div class="row" style="position: relative; top: -54px; left: 15px;">
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">Class Type: </div>
                                                    <input class="inputinsecbox" list="classType" name="classType">
                                                    <datalist id="classType">
                                                        <option value="Lecture">
                                                        <option value="Lab">
                                                        <option value="Lecture & Lab">
                                                    </datalist>
                                                </div>
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">On every </div>
                                                    <input class="inputinsecbox" list="days" name="day">
                                                    <datalist id="days">
                                                        <option value="Monday">
                                                        <option value="Tuesday">
                                                        <option value="Wednesday">
                                                        <option value="Thursday">
                                                        <option value="Friday">
                                                        <option value="Saturday">
                                                    </datalist>
                                                </div>
                                                <div class="col-12 linesecbox" style="overflow: hidden;">
                                                    <div class="textinsecbox">From </div>
                                                    <input class="inputinsecbox" style="width: 90px; float: left;">
                                                    <div class="textinsecbox" style="margin-left: 10px;">to </div>
                                                    <input class="inputinsecbox" style="width: 90px; float: left;">
                                                </div>
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">At </div>
                                                    <input class="inputinsecbox">
                                                </div>
                                            </div>
                                            <div style="background-color: #1A9776; border-radius: 12px; height: 24px; width: 80px; position: relative; top: -73px; left: 233px; text-align: left; color: #ffffff; padding-left: 10px;">Update</div>
                                        </div>
                                        <div>
                                            <div style="background-color: #DB7600; height: 30px; border-top-left-radius: 15px; border-bottom-left-radius: 15px; position: relative; top: 5px; left: 5px; width: 100px; color: #ffffff; font-size: 20px; font-weight: 600; padding-left: 15px;">SEC 2</div>
                                            <div style="background-color: #233975; height: 30px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; position: relative; top: -25px; left: 107px; width: 170px; color: #ffffff; font-size: 15px; font-weight: 400; padding-left: 8px; padding-top: 4px;">Capacity :
                                                <input style="border-radius: 12px; height: 24px; width: 80px; position: relative; top: -1px; right: -3px; text-align: left; color: #000000; padding-left: 10px; border: none;">
                                            </div>
                                            <!-- minus button -->
                                            <button class="dot" style="height: 30px; width: 30px; border-radius: 50%; background-color: rgba(255, 255, 255, 0.5); position: relative; left: 282px; top: -55px; border: none;">
                                                <div style="height: 5px; width: 20px; background-color: #585858; border-radius: 3px; position: relative; left: -1px; top: 1px;"></div>
                                            </button>
                                            <div class="row" style="position: relative; top: -40px; left: 15px;">
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">Class Type: </div>
                                                    <input class="inputinsecbox" list="classType" name="classType">
                                                    <datalist id="classType">
                                                        <option value="Lecture">
                                                        <option value="Lab">
                                                        <option value="Lecture & Lab">
                                                    </datalist>
                                                </div>
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">On every </div>
                                                    <input class="inputinsecbox" list="days" name="day">
                                                    <datalist id="days">
                                                        <option value="Monday">
                                                        <option value="Tuesday">
                                                        <option value="Wednesday">
                                                        <option value="Thursday">
                                                        <option value="Friday">
                                                        <option value="Saturday">
                                                    </datalist>
                                                </div>
                                                <div class="col-12 linesecbox" style="overflow: hidden;">
                                                    <div class="textinsecbox">From </div>
                                                    <input class="inputinsecbox" style="width: 90px; float: left;">
                                                    <div class="textinsecbox" style="margin-left: 10px;">to </div>
                                                    <input class="inputinsecbox" style="width: 90px; float: left;">
                                                </div>
                                                <div class="col-12 linesecbox">
                                                    <div class="textinsecbox">At </div>
                                                    <input class="inputinsecbox">
                                                </div>
                                            </div>
                                            <button style="border: none; background-color: rgba(255, 255, 255, 0); width: 30px; height: 30px; position: relative; left: 8px; top: -37px; overflow: hidden;">
                                                <img src="img/plus.png" style="width: 20px; height: 20px; position: relative; top: 0px; left: 0px;">
                                            </button>
                                            <div style="background-color: #1A9776; border-radius: 12px; height: 24px; width: 80px; position: relative; top: 56px; left: 232px; text-align: left; color: #ffffff; padding-left: 10px;">Update</div>
                                        </div>
                                        <div>
                                            <button class="dot" style="height: 50px; width: 50px; border-radius: 50%; background-color: rgba(255, 255, 255, 0.5); position: relative; left: 133.5px; top: 135px; border: none;">
                                                <img src="img/plus.png" style="width: 30px; height: 30px; position: relative; top: 0px; left: 0px;">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12" style="height: 50px;"></div>
        </div>
    </div>
</body>


























