CREATE DATABASE Peruse_db;

CREATE TABLE post
{
    postType    BIT NOT NULL, -- 0=text | 1=image
    contents    VARCHAR NOT NULL, -- either text or or address of image
    authorId    VARCHAR NOT NULL,
    community   VARCHAR, -- if null then post is only visible on author's profile
    timePosted  TIMESTAMP NOT NULL,
    upvotes     INT NOT NULL,
    downvotes   INT NOT NULL,
    PRIMARY KEY (authorId, timePosted),
    FOREIGN KEY (authorId) REFERENCES account(username),
    FOREIGN KEY (community) REFERENCES community(title)
};

CREATE TABLE account
{
    username        VARCHAR NOT NULL,
    passwordHash    VARCHAR NOT NULL,
    /*firstName       VARCHAR NOT NULL,*/
    /*lastName        VARCHAR NOT NULL,*/
    dateOfBirth     DATE NOT NULL,
    dateJoined      DATE NOT NULL,
    accountType     BIT NOT NULL, -- 0=standard user | 1=administrator
    PRIMARY KEY (username)
};

CREATE TABLE community
{
    title       VARCHAR NOT NULL, -- name of the community
    dateCreated DATE NOT NULL,
    PRIMARY KEY (title)
};

CREATE TABLE following
{
    account VARCHAR NOT NULL,
    following   VARCHAR NOT NULL -- either a community name or account username
};