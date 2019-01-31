<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 06.10.17
 * Time: 0:51
 */

namespace app\components;
use yii\base\Widget;


class PointsWidget extends Widget{


    public function init(){
        parent::init();
    }

    public function run(){

        echo'
        <div id="rec62435032" class="r t-rec t-rec_pt_60 t-rec_pb_0 r_showed r_anim" style="padding-top:60px;padding-bottom:0px; " data-record-type="375">
        <!-- T375 -->
        <div class="t375">
            <div class="t-container">
                <div class="t-col t-col_12 t-align_center">
                    <div class="t375__img">
                        <svg width="50px" height="11.93px" viewBox="0 0 88 21">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g fill="#235421">
                                    <g>
                                        <g>
                                            <path d="M77.2,20.9 C77.2,20.9 76.3,16.6 73.7,14 C71.1,11.4 66.8,10.5 66.8,10.5 C66.8,10.5 71.1,9.6 73.7,7 C76.3,4.3 77.2,0 77.2,0 C77.2,0 78.1,4.3 80.7,7 C83.3,9.6 87.7,10.5 87.7,10.5 C87.7,10.5 83.4,11.4 80.8,14 C78.1,16.6 77.2,20.9 77.2,20.9 L77.2,20.9 Z" id="Shape"></path>
                                            <path d="M44.3,20.9 C44.3,20.9 43.4,16.6 40.8,14 C38.2,11.4 33.9,10.5 33.9,10.5 C33.9,10.5 38.2,9.6 40.8,7 C43.4,4.3 44.3,0 44.3,0 C44.3,0 45.2,4.3 47.8,7 C50.4,9.6 54.8,10.5 54.8,10.5 C54.8,10.5 50.5,11.4 47.9,14 C45.2,16.6 44.3,20.9 44.3,20.9 L44.3,20.9 Z" id="Shape"></path>
                                            <path d="M11.1,20.9 C11.1,20.9 10.2,16.6 7.6,14 C5,11.4 0.7,10.5 0.7,10.5 C0.7,10.5 5,9.6 7.6,7 C10.1,4.3 11.1,0 11.1,0 C11.1,0 12,4.3 14.6,7 C17.2,9.6 21.6,10.5 21.6,10.5 C21.6,10.5 17.3,11.4 14.7,14 C12,16.6 11.1,20.9 11.1,20.9 L11.1,20.9 Z" id="Shape"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
        ';

    }

}