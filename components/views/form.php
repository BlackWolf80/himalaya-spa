
<?php if($type == 'button'):?>


    <div class="t228__right_buttons">
        <div class="t228__right_buttons_wrap">
            <div class="t228__right_buttons_but">
                <a href="#onlineForm" class="t-btn " data-toggle="modal" data-target="#onlineForm" style="color:#ffffff;border:2px solid #ffffff;background-color:#274d40;border-radius:20px; -moz-border-radius:20px; -webkit-border-radius:20px;font-family:Geometria;font-weight:500;box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);">
                    <table style="width:100%; height:100%;">
                        <tr>
                            <td>~ Онлайн запись ~</td>
                        </tr>
                    </table>
                </a>
            </div>
        </div>
    </div>



<?php else:?>

    <!-- Модальное окно -->
    <div class="modal fade  bd-example-modal-lg" id="onlineForm" tabindex="-1" role="dialog" aria-labelledby="onlineForm" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="onlineForm">
                        Выбор  услуги
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //Модальное окно -->
<?php endif;?>


