package DesignPattern.domain.service;

import DesignPattern.domain.api.TestApi;
import DesignPattern.infrastructure.service.Service;

public class TestService implements TestApi {

    private Service service;

    public TestService(Service service) {
        this.service = service;
    }

    @Override
    public void saveAirlineCredit() {
       service.saveAirlineCreditTotheDB();
    }
}
