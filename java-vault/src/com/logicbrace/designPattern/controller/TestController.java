package DesignPattern.controller;

import DesignPattern.domain.api.TestApi;

public class TestController {

    private TestApi testApi;

    public TestController(TestApi testApi) {
        this.testApi = testApi;
    }

    public void saveAirlineCredits(){
        testApi.saveAirlineCredit();
    }
}
