package com.venefica.model;

import java.util.Date;
import javax.persistence.Access;
import javax.persistence.AccessType;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToOne;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import org.hibernate.annotations.ForeignKey;

/**
 * Represents a spam mark for an ad.
 *
 * @author Sviatoslav Grebenchukov
 */
@Entity
@Table(name = "spammark")
public class SpamMark {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Access(AccessType.PROPERTY)
    private Long id;
    
    @ManyToOne(fetch = FetchType.LAZY)
    @ForeignKey(name = "spammark_ad_fk")
    private Ad ad;
    
    @ManyToOne(fetch = FetchType.LAZY)
    @ForeignKey(name = "spammark_witness_fk")
    private User witness;
    
    @Temporal(TemporalType.TIMESTAMP)
    private Date markedAt;
    
    // WARNING: required by hibernate
    public SpamMark() {
    }

    public SpamMark(Ad ad, User user) {
        this.ad = ad;
        this.witness = user;
    }

    public Long getId() {
        return id;
    }

    @SuppressWarnings("unused")
    private void setId(Long id) {
        this.id = id;
    }

    public User getWitness() {
        return witness;
    }

    public void setWitness(User witness) {
        this.witness = witness;
    }

    public Ad getAd() {
        return ad;
    }

    public void setAd(Ad ad) {
        this.ad = ad;
    }

    public Date getMarkedAt() {
        return markedAt;
    }

    public void setMarkedAt(Date markedAt) {
        this.markedAt = markedAt;
    }
}
