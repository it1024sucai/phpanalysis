<?php
use it1024sucai\PhpAnalysis;

// 实例化对象
$phpAnalysisObject = new PhpAnalysis();
// 设置分词字符串
$phpAnalysisObject->SetSource('如何建立自己的composer包');
// 相关配置
$phpAnalysisObject->SetResultType(1);
$phpAnalysisObject->differMax = true;

// 执行分词
$phpAnalysisObject->StartAnalysis();
// 获取分词结果
$result = $phpAnalysisObject->GetFinallyResult(',');