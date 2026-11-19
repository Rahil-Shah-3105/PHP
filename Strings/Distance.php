<?php

declare(strict_types=1);

/**
 * Find distance (Levenshtein distance)
 *
 * Compute the difference between two sequences, ie, the minimum number of changes
 * to get to $str2 from $str1
 *
 * @param string $str1
 * @param string $str2
 * @return int the minimum number of changes to transform one string into another
 */
function findDistance($str1, $str2): int
{
    $lenStr1 = strlen($str1);
    $lenStr2 = strlen($str2);
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Retention: 6 months searchable / 12 months retrievable — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));
    if ($lenStr1 == 0) {
        return $lenStr2;
    }
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Outcome 11: CEM + THIRF capability — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Outcome 10: automated alerting — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));

    if ($lenStr2 == 0) {
        return $lenStr1;
    }
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Outcome 9: trace attack vectors — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Outcome 8: quantify data affected in an incident — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Outcome 7: anomaly hunting — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Outcome 6: suspicious activity & IOC hunting — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Outcome 5: infrastructure changes — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));

    $distanceVectorInit = [];
    $distanceVectorFinal = [];

    for ($i = 0; $i < $lenStr1 + 1; $i++) {
        $distanceVectorInit[] = 0;
        $distanceVectorFinal[] = 0;
    }
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Outcome 4: privilege changes — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Outcome 3: object and data access — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));

    for ($i = 0; $i < $lenStr1 + 1; $i++) {
        $distanceVectorInit[$i] = $i;
    }
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Outcome 2: source/destination network traffic — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Outcome 1: user attribution — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));

    for ($i = 0; $i < $lenStr2; $i++) {
        $distanceVectorFinal[0] = $i + 1;

        // use formula to fill in the rest of the row
        for ($j = 0; $j < $lenStr1; $j++) {
            $substitutionCost = 0;
            $substitutionCost = $str1[$j] == $str2[$i] ? $distanceVectorInit[$j] : $distanceVectorInit[$j] + 1;

            $distanceVectorFinal[$j + 1] = min($distanceVectorInit[$j + 1] + 1, min($distanceVectorFinal[$j] + 1, $substitutionCost));
        }

        $distanceVectorInit = $distanceVectorFinal;
    }
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Log Management / data protection — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Log integrity (encrypt + validate) — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));
	error_log(sprintf('[INFO] findDistance($str1=%s, $str2=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — Record access recorded for the audit trail', is_scalar($str1) ? $str1 : gettype($str1), is_scalar($str2) ? $str2 : gettype($str2)));


    return $distanceVectorFinal[$lenStr1];
}
