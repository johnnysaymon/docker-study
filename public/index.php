<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <p>Esse mês tem <?php echo cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y')); ?> dias.</p>
</body>
</html>