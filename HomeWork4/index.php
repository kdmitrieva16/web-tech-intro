// Cформировать массив с данными для блока «Опыт работы».
// Вывести данные массива в HTML-шаблоне.

<?php
    // формируем массив c опытом работы
    $job = [
        'job_name' => ['ООО «Ист-логистика»', 'ЗАО «Вильма»', 'ГК Дамате'],
        'job_data' => ['2022-настоящее время', '2010-2022', '2004-2010'],
        'job_desc' => ['анализ финансово-хозяйственной деятельность предприятия;', 'контроль выполнения плановых показателей', 'Бухгалтер на участок банк-клиент']
    ]
?>

<div class="w3-container w3-card w3-white w3-margin-bottom">
    <h2 class="w3-text-grey w3-padding-16"><i
        class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
            <?php echo $job['job_name'][0]; ?>
        </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
        <?php echo $job['job_data'][0]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][0]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
            <?php echo $job['job_name'][1]; ?>
        </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['job_data'][1]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][1]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
            <?php echo $job['job_name'][2]; ?>
        </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['job_data'][2]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][2]; ?>
        </p><br>
    </div>
</div>