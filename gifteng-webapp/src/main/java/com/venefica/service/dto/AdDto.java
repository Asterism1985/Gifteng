package com.venefica.service.dto;

import com.venefica.model.Ad;
import com.venefica.model.AdPlace;
import com.venefica.model.AdStatus;
import com.venefica.model.AdType;
import com.venefica.model.WeekDay;
import java.math.BigDecimal;
import java.util.Date;
import java.util.List;
import java.util.Set;
import javax.validation.constraints.Min;
import javax.validation.constraints.NotNull;
import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlElementWrapper;

/**
 * Describes an advertisement data transfer object.
 *
 * @author Sviatoslav Grebenchukov
 */
@XmlAccessorType(XmlAccessType.FIELD)
public class AdDto extends DtoBase {
    
    // out
    private Long id;
    // out
    private int lastIndex; //used at result pagination instead of lastAdId
    // out
    private Integer revision;
    // in, out
    private Long categoryId;
    // out
    private String category;
    // in, out
    @NotNull
    private String title;
    // in, out
    private String subtitle;
    // in, out
    private String description;
    // in, out
    private BigDecimal price;
    // in, out
    private boolean free;
    // in, out
    @Min(1)
    @NotNull
    private Integer quantity;
    // in, out
    private ImageDto image;
    // in, out
    private ImageDto imageThumbnail;
    // out
    @XmlElementWrapper(name = "images")
    @XmlElement(name = "item")
    private List<ImageDto> images;
    // out
    private Date createdAt;
    // out
    private boolean deleted;
    // out
    private boolean owner;
    // out
    private boolean inBookmarks;
    // out
    private boolean sold;
    // out
    private boolean expired;
    // out
    private boolean requested; //there is a valid request for this ad by the current user
    // out
    private boolean online; //not onlined ads are visible only for the owner
    // out
    private boolean approved; //approval status of the ad
    // in, out
    private Boolean expires; //never expire?
    // in, out
    private Date availableAt; //start date
    // out
    private Date soldAt;
    // in, out
    private Date expiresAt; //end date
    // out
    private Boolean canRate;
    // out
    private UserDto creator;
    // out
    private Boolean canMarkAsSpam;
    // in, out
    private ShippingBoxDto shippingBox;
    // in, out
    private Boolean freeShipping; //delivery type
    // in, out
    private Boolean pickUp; //delivery type
    // in, out
    private AdPlace place; //redeem type
    // out
    private AdType type;
    // out
    @XmlElementWrapper(name = "comments")
    @XmlElement(name = "item")
    private List<CommentDto> comments;
    // in, out
    private AddressDto address;
    // out
    private AdStatus status;
    // out
    private boolean hiddenForSearch;
    // out
    private boolean staffPick;
    // out
    @XmlElementWrapper(name = "requests")
    @XmlElement(name = "item")
    private List<RequestDto> requests;
    // out
    private Boolean canRequest;
    // out
    private BigDecimal neededScoreToRequest;
    // out
    private Boolean canRelist;
    // out
    private Boolean canProlong;
    // out
    private AdStatisticsDto statistics;
    // out
    private ApprovalDto approval; // the approval of the ad on specified revision
    
    // business ad data
    
    // in, out
    private String promoCode;
    // in, out
    private boolean generatePromoCodeForRequests;
    // in, out
    private PromoCodeProviderDto promoCodeProvider;
    // in, out
    private String website; //adPlace in (ONLINE, BOTH)
    // in, out
    private Date redemptionEndDate;
    // in, out
    private boolean allAddresses;
    // in, out
    private Set<AddressDto> addresses; //adPlace in (LOCATION, BOTH)
    
    // in, out
    private Boolean needsReservation; //TODO: probably is not needed
    // in, out
    private Date availableFromTime; //TODO: probably is not needed
    // in, out
    private Date availableToTime; //TODO: probably is not needed
    // in, out
    private Boolean availableAllDay; //TODO: probably is not needed
    // in, out
    private Set<WeekDay> availableDays; //TODO: probably is not needed
    // in, out
    private ImageDto imageBarcode; //TODO: probably is not needed
    
    // Required for JAX-WS
    public AdDto() {
    }

    public void updateAd(Ad ad) {
        ad.getAdData().setTitle(title);
        ad.getAdData().setSubtitle(subtitle);
        ad.getAdData().setDescription(description);
        ad.getAdData().setPrice(price);
        ad.getAdData().setQuantity(quantity != null ? quantity : 1);
        ad.getAdData().setFreeShipping(freeShipping);
        ad.getAdData().setPickUp(pickUp);
        ad.getAdData().setPlace(place);
        ad.getAdData().setAddress(address != null ? address.toAddress() : null);
        ad.getAdData().setLocation(address != null ? address.toLocation() : null);
        
        ad.getAdData().updateAd(this);
    }
    
    // getter/setter

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Long getCategoryId() {
        return categoryId;
    }

    public void setCategoryId(Long categoryId) {
        this.categoryId = categoryId;
    }

    public String getCategory() {
        return category;
    }

    public void setCategory(String category) {
        this.category = category;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public BigDecimal getPrice() {
        return price;
    }

    public void setPrice(BigDecimal price) {
        this.price = price;
    }

    public ImageDto getImage() {
        return image;
    }

    public void setImage(ImageDto image) {
        this.image = image;
    }

    public ImageDto getImageThumbnail() {
        return imageThumbnail;
    }

    public void setImageThumbnail(ImageDto imageThumbnail) {
        this.imageThumbnail = imageThumbnail;
    }

    public List<ImageDto> getImages() {
        return images;
    }

    public void setImages(List<ImageDto> images) {
        this.images = images;
    }

    public Date getCreatedAt() {
        return createdAt;
    }

    public void setCreatedAt(Date createdAt) {
        this.createdAt = createdAt;
    }

    public boolean isDeleted() {
        return deleted;
    }

    public void setDeleted(boolean deleted) {
        this.deleted = deleted;
    }
    
    public boolean isOwner() {
        return owner;
    }

    public void setOwner(boolean owner) {
        this.owner = owner;
    }

    public boolean isInBookmarks() {
        return inBookmarks;
    }

    public void setInBookmarks(boolean inBookmarks) {
        this.inBookmarks = inBookmarks;
    }

    public boolean isExpired() {
        return expired;
    }

    public void setExpired(boolean expired) {
        this.expired = expired;
    }

    public Date getExpiresAt() {
        return expiresAt;
    }

    public void setExpiresAt(Date expiresAt) {
        this.expiresAt = expiresAt;
    }

    public Boolean getCanRate() {
        return canRate;
    }

    public void setCanRate(Boolean canRate) {
        this.canRate = canRate;
    }

    public UserDto getCreator() {
        return creator;
    }

    public void setCreator(UserDto creator) {
        this.creator = creator;
    }

    public Boolean getCanMarkAsSpam() {
        return canMarkAsSpam;
    }

    public void setCanMarkAsSpam(Boolean canMarkAsSpam) {
        this.canMarkAsSpam = canMarkAsSpam;
    }

    public List<CommentDto> getComments() {
        return comments;
    }

    public void setComments(List<CommentDto> comments) {
        this.comments = comments;
    }

    public Integer getQuantity() {
        return quantity;
    }

    public void setQuantity(Integer quantity) {
        this.quantity = quantity;
    }

    public boolean isRequested() {
        return requested;
    }

    public void setRequested(boolean requested) {
        this.requested = requested;
    }

    public Boolean getFreeShipping() {
        return freeShipping;
    }

    public void setFreeShipping(Boolean freeShipping) {
        this.freeShipping = freeShipping;
    }

    public Boolean getPickUp() {
        return pickUp;
    }

    public void setPickUp(Boolean pickUp) {
        this.pickUp = pickUp;
    }

    public AddressDto getAddress() {
        return address;
    }

    public void setAddress(AddressDto address) {
        this.address = address;
    }

    public String getSubtitle() {
        return subtitle;
    }

    public void setSubtitle(String subtitle) {
        this.subtitle = subtitle;
    }

    public Date getAvailableAt() {
        return availableAt;
    }

    public void setAvailableAt(Date availableAt) {
        this.availableAt = availableAt;
    }

    public Boolean getExpires() {
        return expires;
    }

    public void setExpires(Boolean expires) {
        this.expires = expires;
    }

    public AdPlace getPlace() {
        return place;
    }

    public void setPlace(AdPlace place) {
        this.place = place;
    }

    public String getPromoCode() {
        return promoCode;
    }

    public void setPromoCode(String promoCode) {
        this.promoCode = promoCode;
    }

    public String getWebsite() {
        return website;
    }

    public void setWebsite(String website) {
        this.website = website;
    }

    public Boolean getNeedsReservation() {
        return needsReservation;
    }

    public void setNeedsReservation(Boolean needsReservation) {
        this.needsReservation = needsReservation;
    }

    public Date getAvailableFromTime() {
        return availableFromTime;
    }

    public void setAvailableFromTime(Date availableFromTime) {
        this.availableFromTime = availableFromTime;
    }

    public Date getAvailableToTime() {
        return availableToTime;
    }

    public void setAvailableToTime(Date availableToTime) {
        this.availableToTime = availableToTime;
    }

    public Set<WeekDay> getAvailableDays() {
        return availableDays;
    }

    public void setAvailableDays(Set<WeekDay> availableDays) {
        this.availableDays = availableDays;
    }

    public AdType getType() {
        return type;
    }

    public void setType(AdType type) {
        this.type = type;
    }

    public Boolean getAvailableAllDay() {
        return availableAllDay;
    }

    public void setAvailableAllDay(Boolean availableAllDay) {
        this.availableAllDay = availableAllDay;
    }

    public ImageDto getImageBarcode() {
        return imageBarcode;
    }

    public void setImageBarcode(ImageDto imageBarcode) {
        this.imageBarcode = imageBarcode;
    }

    public AdStatus getStatus() {
        return status;
    }

    public void setStatus(AdStatus status) {
        this.status = status;
    }

    public List<RequestDto> getRequests() {
        return requests;
    }

    public void setRequests(List<RequestDto> requests) {
        this.requests = requests;
    }

    public AdStatisticsDto getStatistics() {
        return statistics;
    }

    public void setStatistics(AdStatisticsDto statistics) {
        this.statistics = statistics;
    }

    public Boolean getCanRequest() {
        return canRequest;
    }

    public void setCanRequest(Boolean canRequest) {
        this.canRequest = canRequest;
    }
    
    public BigDecimal getNeededScoreToRequest() {
        return neededScoreToRequest;
    }
    
    public void setNeededScoreToRequest(BigDecimal neededScoreToRequest) {
        this.neededScoreToRequest = neededScoreToRequest;
    }

    public boolean isSold() {
        return sold;
    }

    public void setSold(boolean sold) {
        this.sold = sold;
    }

    public Date getSoldAt() {
        return soldAt;
    }

    public void setSoldAt(Date soldAt) {
        this.soldAt = soldAt;
    }

    public boolean isOnline() {
        return online;
    }

    public void setOnline(boolean online) {
        this.online = online;
    }

    public boolean isApproved() {
        return approved;
    }

    public void setApproved(boolean approved) {
        this.approved = approved;
    }

    public Integer getRevision() {
        return revision;
    }

    public void setRevision(Integer revision) {
        this.revision = revision;
    }

    public ApprovalDto getApproval() {
        return approval;
    }

    public void setApproval(ApprovalDto approval) {
        this.approval = approval;
    }

    public Boolean getCanRelist() {
        return canRelist;
    }

    public void setCanRelist(Boolean canRelist) {
        this.canRelist = canRelist;
    }

    public Boolean getCanProlong() {
        return canProlong;
    }

    public void setCanProlong(Boolean canProlong) {
        this.canProlong = canProlong;
    }

    public int getLastIndex() {
        return lastIndex;
    }

    public void setLastIndex(int lastIndex) {
        this.lastIndex = lastIndex;
    }

    public boolean isGeneratePromoCodeForRequests() {
        return generatePromoCodeForRequests;
    }

    public void setGeneratePromoCodeForRequests(boolean generatePromoCodeForRequests) {
        this.generatePromoCodeForRequests = generatePromoCodeForRequests;
    }

    public Date getRedemptionEndDate() {
        return redemptionEndDate;
    }

    public void setRedemptionEndDate(Date redemptionEndDate) {
        this.redemptionEndDate = redemptionEndDate;
    }

    public Set<AddressDto> getAddresses() {
        return addresses;
    }

    public void setAddresses(Set<AddressDto> addresses) {
        this.addresses = addresses;
    }

    public boolean isFree() {
        return free;
    }

    public void setFree(boolean free) {
        this.free = free;
    }

    public boolean isAllAddresses() {
        return allAddresses;
    }

    public void setAllAddresses(boolean allAddresses) {
        this.allAddresses = allAddresses;
    }

    public ShippingBoxDto getShippingBox() {
        return shippingBox;
    }

    public void setShippingBox(ShippingBoxDto shippingBox) {
        this.shippingBox = shippingBox;
    }

    public PromoCodeProviderDto getPromoCodeProvider() {
        return promoCodeProvider;
    }

    public void setPromoCodeProvider(PromoCodeProviderDto promoCodeProvider) {
        this.promoCodeProvider = promoCodeProvider;
    }

    public boolean isHiddenForSearch() {
        return hiddenForSearch;
    }

    public void setHiddenForSearch(boolean hiddenForSearch) {
        this.hiddenForSearch = hiddenForSearch;
    }

    public boolean isStaffPick() {
        return staffPick;
    }

    public void setStaffPick(boolean staffPick) {
        this.staffPick = staffPick;
    }
}
