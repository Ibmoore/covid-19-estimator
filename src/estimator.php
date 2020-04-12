<?php

function covid19ImpactEstimator($data)
{
  return $data;
  data: {
    region: {
      name: "Africa";
      avgAge: 19.7;
      avgDailyIncomeInUSD: 5;
      avgDailyIncomePopulation: 0.71;
      };
      periodType: "days";
timeToElapse: 30;
reportedCases: 674;
population: 66622705;
totalHospitalBeds: 1380614;
  };
  estimate: {
  impact: {
    currentlyInfected: 6740;
    infectionByRequestedTime: 6901760;
    severeCasesByRequestedTime: 1035264;
    hospitalBedsByRequestedTime: 345350;
    casesForICUByRequestedTime: 345088;
    casesForVentilatorsByRequestedTime: 138035;
    dollarsInFlight: 224307; 
  };
  severeImpact: {
    currentlyInfected: 33700;
    infectionByRequestedTime: 34508800;
    severeCasesByRequestedTime: 5176320;
    hospitalBedsByRequestedTime: -3795706;
    casesForICUByRequestedTime: 1725440;
    casesForVentilatorsByRequestedTime: 690176;
    dollarsInFlight: 1121536;     
  };
}
}