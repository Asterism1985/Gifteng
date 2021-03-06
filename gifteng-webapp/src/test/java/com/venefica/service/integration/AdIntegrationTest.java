/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.venefica.service.integration;

import com.venefica.common.DumpErrorTestExecutionListener;
import com.venefica.service.AdService;
import com.venefica.service.AuthService;
import com.venefica.service.ServiceTestBase;
import com.venefica.service.dto.AdDto;
import com.venefica.service.dto.FilterDto;
import com.venefica.service.dto.FilterType;
import com.venefica.service.fault.AuthenticationException;
import com.venefica.service.fault.UserNotFoundException;
import java.math.BigDecimal;
import java.util.List;
import javax.annotation.Resource;
import org.junit.Before;
import org.junit.Ignore;
import org.junit.Test;
import org.junit.experimental.categories.Category;
import org.junit.runner.RunWith;
import org.springframework.test.context.ContextConfiguration;
import org.springframework.test.context.TestExecutionListeners;
import org.springframework.test.context.junit4.SpringJUnit4ClassRunner;

/**
 *
 * @author gyuszi
 */
@RunWith(SpringJUnit4ClassRunner.class)
@ContextConfiguration(locations = "/IntegrationTest-context.xml")
@TestExecutionListeners({DumpErrorTestExecutionListener.class})
@Category(IntegrationTestMarker.class)
public class AdIntegrationTest {
    
    private AuthService authService;
    private AdService adService;
    
    @Resource(name = "authServiceUrl")
    private String authServiceUrl;
    @Resource(name = "adServiceUrl")
    private String adServiceUrl;
    
    @Before
    @SuppressWarnings("unchecked")
    public void initClientsAndProxies() {
        authService = ServiceTestBase.createClient(authServiceUrl, AuthService.class);
        adService = ServiceTestBase.createClient(adServiceUrl, AdService.class);
        
        ServiceTestBase.configureTimeouts(authService);
        ServiceTestBase.configureTimeouts(adService);
    }
    
    @Test
    @Ignore
    public void getAdsExLocationTest() throws UserNotFoundException, AuthenticationException {
        String token = authService.authenticateEmail("a@a.com", "Gift2020", null);
        ServiceTestBase.authenticateClientWithToken(adService, token);
        
        FilterDto filter = new FilterDto();
        filter.setDistance(50L);
        filter.setLongitude(new Double("-74.0119"));
        filter.setLatitude(new Double("39.715"));
        filter.setMinPrice(new BigDecimal("0"));
        filter.setMaxPrice(new BigDecimal("5000000"));
        filter.setHasPhoto(true);
        filter.setSearchString("");
        //filter.setIncludeOwned(false);
        filter.setFilterType(FilterType.ACTIVE);
        List<AdDto> ads = adService.getAds(0, 11, filter, false, true, 0, false);
        
        System.out.println("ads: " + ads);
    }
}
