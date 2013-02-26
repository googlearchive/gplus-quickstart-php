<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


  /**
   * The "activities" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new Google_YouTubeService(...);
   *   $activities = $youtubeService->activities;
   *  </code>
   */
  class Google_ActivitiesServiceResource extends Google_ServiceResource {


    /**
     * Posts a bulletin for a specific channel. (The user submitting the request must be authorized to
     * act on the channel's behalf.) (activities.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
    The part names that you can include in the parameter value are snippet and contentDetails.
     * @param Google_Activity $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Activity
     */
    public function insert($part, Google_Activity $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Activity($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of channel activity events that match the request criteria. For example, you can
     * retrieve events associated with a particular channel, events associated with the user's
     * subscriptions and Google+ friends, or the YouTube home page feed, which is customized for each
     * user. (activities.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more activity resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, and contentDetails.
    If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a activity resource, the snippet property contains other properties that identify the type of activity, a display title for the activity, and so forth. If you set part=snippet, the API response will also contain all of those nested properties.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string channelId The channelId parameter specifies a unique YouTube channel ID. The API will then return a list of that channel's activities.
     * @opt_param string home Set this parameter's value to true to retrieve the activity feed that displays on the YouTube home page for the currently authenticated user.
     * @opt_param string maxResults USE_DESCRIPTION --- channels:list:maxResults
     * @opt_param bool mine Set this parameter's value to true to retrieve a feed of the authenticated user's activities.
     * @opt_param string pageToken USE_DESCRIPTION --- channels:list:pageToken
     * @opt_param string publishedAfter The publishedAfter parameter specifies the earliest date and time that an activity could have occurred for that activity to be included in the API response. If the parameter value specifies a day, but not a time, then any activities that occurred that day will be included in the result set. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format.
     * @opt_param string publishedBefore The publishedBefore parameter specifies the date and time before which an activity must have occurred for that activity to be included in the API response. If the parameter value specifies a day, but not a time, then any activities that occurred that day will be excluded from the result set. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format.
     * @return Google_ActivityListResponse
     */
    public function listActivities($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_ActivityListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "channels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new Google_YouTubeService(...);
   *   $channels = $youtubeService->channels;
   *  </code>
   */
  class Google_ChannelsServiceResource extends Google_ServiceResource {


    /**
     * Returns a collection of zero or more channel resources that match the request criteria.
     * (channels.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more channel resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, contentDetails, statistics, and topicDetails.
    If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a channel resource, the contentDetails property contains other properties, such as the uploads properties. As such, if you set part=contentDetails, the API response will also contain all of those nested properties.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string categoryId The categoryId parameter specifies a YouTube guide category, thereby requesting YouTube channels associated with that category.
     * @opt_param string id The id parameter specifies a comma-separated list of the YouTube channel ID(s) for the resource(s) that are being retrieved. In a channel resource, the id property specifies the channel's YouTube channel ID.
     * @opt_param string maxResults The maxResults parameter specifies the maximum number of items that should be returned in the result set.
     * @opt_param bool mine Set this parameter's value to true to instruct the API to only return channels owned by the authenticated user.
     * @opt_param string mySubscribers Set this parameter's value to true to retrieve a list of channels that subscribed to the authenticated user's channel.
     * @opt_param string pageToken The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved.
     * @return Google_ChannelListResponse
     */
    public function listChannels($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_ChannelListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "guideCategories" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new Google_YouTubeService(...);
   *   $guideCategories = $youtubeService->guideCategories;
   *  </code>
   */
  class Google_GuideCategoriesServiceResource extends Google_ServiceResource {


    /**
     * Returns a list of categories that can be associated with YouTube channels. (guideCategories.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more guideCategory resource properties that the API response will include. The part names that you can include in the parameter value are id and snippet.
    If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a guideCategory resource, the snippet property contains other properties, such as the category's title. If you set part=snippet, the API response will also contain all of those nested properties.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string hl The hl parameter specifies the language that will be used for text values in the API response.
     * @opt_param string id The id parameter specifies a comma-separated list of the YouTube channel category ID(s) for the resource(s) that are being retrieved. In a guideCategory resource, the id property specifies the YouTube channel category ID.
     * @opt_param string regionCode The regionCode parameter instructs the API to return the list of guide categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
     * @return Google_GuideCategoryListResponse
     */
    public function listGuideCategories($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_GuideCategoryListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "liveBroadcasts" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new Google_YouTubeService(...);
   *   $liveBroadcasts = $youtubeService->liveBroadcasts;
   *  </code>
   */
  class Google_LiveBroadcastsServiceResource extends Google_ServiceResource {


    /**
     * Bind a YouTube live broadcast to a stream. (liveBroadcasts.bind)
     *
     * @param string $id ID of the broadcast to which the stream will be bound
     * @param string $part Live broadcast parts to be returned in the response. Valid values are: id, snippet, status, slateSettings, contentDetails.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string streamId ID of the stream to bind to the broadcast
     * @return Google_LiveBroadcast
     */
    public function bind($id, $part, $optParams = array()) {
      $params = array('id' => $id, 'part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('bind', array($params));
      if ($this->useObjects()) {
        return new Google_LiveBroadcast($data);
      } else {
        return $data;
      }
    }
    /**
     * Delete a YouTube live broadcast. (liveBroadcasts.delete)
     *
     * @param string $id The id parameter specifies the YouTube live broadcast ID for the resource that is being deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Insert a YouTube live broadcast. (liveBroadcasts.insert)
     *
     * @param string $part Live broadcast parts to be set for the broadcast as well as included in the returned response. Valid values are: snippet, status, slateSettings, contentDetails.
     * @param Google_LiveBroadcast $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LiveBroadcast
     */
    public function insert($part, Google_LiveBroadcast $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_LiveBroadcast($data);
      } else {
        return $data;
      }
    }
    /**
     * Browse the YouTube broadcast collection. (liveBroadcasts.list)
     *
     * @param string $part Live broadcast parts to include in the returned response. Valid values are: id, snippet, status, slateSettings, contentDetails.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string broadcastStatus Filter to only return broadcasts with the given status by the authenticated user.
     * @opt_param string id IDs of the live broadcasts to be returned.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param bool mine Filter to only return broadcasts owned by authenticated user.
     * @opt_param string onBehalfOf ID of the Google+ Page for the channel that the request is be on behalf of
     * @opt_param string pageToken Token for the page selection.
     * @return Google_LiveBroadcastList
     */
    public function listLiveBroadcasts($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_LiveBroadcastList($data);
      } else {
        return $data;
      }
    }
    /**
     * Change the broadcasting status of a YouTube live broadcast and start all the processes associated
     * with it. (liveBroadcasts.transition)
     *
     * @param string $broadcastStatus Desired broadcast status.
     * @param string $id ID of the broadcast to change status
     * @param string $part Live broadcast parts to be returned in the response. Valid values are: id, snippet, status, slateSettings, contentDetails.
     * @param array $optParams Optional parameters.
     * @return Google_LiveBroadcast
     */
    public function transition($broadcastStatus, $id, $part, $optParams = array()) {
      $params = array('broadcastStatus' => $broadcastStatus, 'id' => $id, 'part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('transition', array($params));
      if ($this->useObjects()) {
        return new Google_LiveBroadcast($data);
      } else {
        return $data;
      }
    }
    /**
     * Update a YouTube live broadcast. (liveBroadcasts.update)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
    The part names that you can include in the parameter value are id, snippet, status, slateSettings, contentDetails.
     * @param Google_LiveBroadcast $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LiveBroadcast
     */
    public function update($part, Google_LiveBroadcast $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_LiveBroadcast($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "liveStreams" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new Google_YouTubeService(...);
   *   $liveStreams = $youtubeService->liveStreams;
   *  </code>
   */
  class Google_LiveStreamsServiceResource extends Google_ServiceResource {


    /**
     * Delete a live stream. (liveStreams.delete)
     *
     * @param string $id The id parameter specifies the YouTube live stream ID for the resource that is being deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Insert a YouTube live stream. (liveStreams.insert)
     *
     * @param string $part Live stream parts to include in the returned response. Valid values are: id, snippet, cdn, status.
     * @param Google_LiveStream $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LiveStream
     */
    public function insert($part, Google_LiveStream $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_LiveStream($data);
      } else {
        return $data;
      }
    }
    /**
     * Browse the YouTube live stream collection. (liveStreams.list)
     *
     * @param string $part Live stream parts to include in the returned response. Valid values are: id, snippet, cdn, status.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string id IDs of the live streams to be returned.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param bool mine Filter to only live streams owned by authenticated user.
     * @opt_param string onBehalfOf ID of the Google+ Page for the channel that the request is to be on behalf of
     * @opt_param string pageToken Token for the page selection.
     * @return Google_LiveStreamList
     */
    public function listLiveStreams($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_LiveStreamList($data);
      } else {
        return $data;
      }
    }
    /**
     * Update a YouTube live stream. (liveStreams.update)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
    The part names that you can include in the parameter value are id, snippet, cdn, status.
     * @param Google_LiveStream $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LiveStream
     */
    public function update($part, Google_LiveStream $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_LiveStream($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "playlistItems" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new Google_YouTubeService(...);
   *   $playlistItems = $youtubeService->playlistItems;
   *  </code>
   */
  class Google_PlaylistItemsServiceResource extends Google_ServiceResource {


    /**
     * Deletes a playlist item. (playlistItems.delete)
     *
     * @param string $id The id parameter specifies the YouTube playlist item ID for the playlist item that is being deleted. In a playlistItem resource, the id property specifies the playlist item's ID.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Adds a resource to a playlist. (playlistItems.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
    The part names that you can include in the parameter value are snippet and contentDetails.
     * @param Google_PlaylistItem $postBody
     * @param array $optParams Optional parameters.
     * @return Google_PlaylistItem
     */
    public function insert($part, Google_PlaylistItem $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_PlaylistItem($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a collection of playlist items that match the API request parameters. You can retrieve
     * all of the playlist items in a specified playlist or retrieve one or more playlist items by their
     * unique IDs. (playlistItems.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more playlistItem resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, and contentDetails.
    If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a playlistItem resource, the snippet property contains numerous fields, including the title, description, position, and resourceId properties. As such, if you set part=snippet, the API response will contain all of those properties.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string id The id parameter specifies a comma-separated list of one or more unique playlist item IDs.
     * @opt_param string maxResults USE_DESCRIPTION --- channels:list:maxResults
     * @opt_param string pageToken USE_DESCRIPTION --- channels:list:pageToken
     * @opt_param string playlistId The playlistId parameter specifies the unique ID of the playlist for which you want to retrieve playlist items. Note that even though this is an optional parameter, every request to retrieve playlist items must specify a value for either the id parameter or the playlistId parameter.
     * @opt_param string videoId The videoId parameter specifies that the request should return only the playlist items that contain the specified video.
     * @return Google_PlaylistItemListResponse
     */
    public function listPlaylistItems($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_PlaylistItemListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Modifies a playlist item. For example, you could update the item's position in the playlist.
     * (playlistItems.update)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
    The part names that you can include in the parameter value are snippet and contentDetails.
    Note that this method will override the existing values for all of the mutable properties that are contained in any parts that the parameter value specifies. For example, a playlist item can specify a start time and end time, which identify the times portion of the video that should play when users watch the video in the playlist. If your request is updating a playlist item that sets these values, and the request's part parameter value includes the contentDetails part, the playlist item's start and end times will be updated to whatever value the request body specifies. If the request body does not specify values, the existing start and end times will be removed and replaced with the default settings.
     * @param Google_PlaylistItem $postBody
     * @param array $optParams Optional parameters.
     * @return Google_PlaylistItem
     */
    public function update($part, Google_PlaylistItem $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_PlaylistItem($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "playlists" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new Google_YouTubeService(...);
   *   $playlists = $youtubeService->playlists;
   *  </code>
   */
  class Google_PlaylistsServiceResource extends Google_ServiceResource {


    /**
     * Deletes a playlist. (playlists.delete)
     *
     * @param string $id The id parameter specifies the YouTube playlist ID for the playlist that is being deleted. In a playlist resource, the id property specifies the playlist's ID.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Creates a playlist. (playlists.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
    The part names that you can include in the parameter value are snippet and status.
     * @param Google_Playlist $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Playlist
     */
    public function insert($part, Google_Playlist $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Playlist($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a collection of playlists that match the API request parameters. For example, you can
     * retrieve all playlists that the authenticated user owns, or you can retrieve one or more
     * playlists by their unique IDs. (playlists.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more playlist resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, and status.
    If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a playlist resource, the snippet property contains properties like author, title, description, tags, and timeCreated. As such, if you set part=snippet, the API response will contain all of those properties.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string channelId This value indicates that the API should only return the specified channel's playlists.
     * @opt_param string id The id parameter specifies a comma-separated list of the YouTube playlist ID(s) for the resource(s) that are being retrieved. In a playlist resource, the id property specifies the playlist's YouTube playlist ID.
     * @opt_param string maxResults USE_DESCRIPTION --- channels:list:maxResults
     * @opt_param bool mine Set this parameter's value to true to instruct the API to only return playlists owned by the authenticated user.
     * @opt_param string pageToken USE_DESCRIPTION --- channels:list:pageToken
     * @return Google_PlaylistListResponse
     */
    public function listPlaylists($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_PlaylistListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Modifies a playlist. For example, you could change a playlist's title, description, or privacy
     * status. (playlists.update)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
    The part names that you can include in the parameter value are snippet and status.
    Note that this method will override the existing values for all of the mutable properties that are contained in any parts that the parameter value specifies. For example, a playlist's privacy setting is contained in the status part. As such, if your request is updating a private playlist, and the request's part parameter value includes the status part, the playlist's privacy setting will be updated to whatever value the request body specifies. If the request body does not specify a value, the existing privacy setting will be removed and the playlist will revert to the default privacy setting.
     * @param Google_Playlist $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Playlist
     */
    public function update($part, Google_Playlist $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Playlist($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "search" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new Google_YouTubeService(...);
   *   $search = $youtubeService->search;
   *  </code>
   */
  class Google_SearchServiceResource extends Google_ServiceResource {


    /**
     * Returns a collection of search results that match the query parameters specified in the API
     * request. By default, a search result set identifies matching video, channel, and playlist
     * resources, but you can also configure queries to only retrieve a specific type of resource.
     * (search.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more search resource properties that the API response will include. The part names that you can include in the parameter value are id and snippet.
    If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a search result, the snippet property contains other properties that identify the result's title, description, and so forth. If you set part=snippet, the API response will also contain all of those nested properties.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string channelId The channelId parameter indicates that the API response should only contain resources created by the channel
     * @opt_param string maxResults USE_DESCRIPTION --- channels:list:maxResults
     * @opt_param string order The order parameter specifies the method that will be used to order resources in the API response.
     * @opt_param string pageToken USE_DESCRIPTION --- channels:list:pageToken
     * @opt_param string publishedAfter The publishedAfter parameter indicates that the API response should only contain resources created after the specified time. The value is an RFC 3339 formatted date-time value (1970-01-01T00:00:00Z).
     * @opt_param string publishedBefore The publishedBefore parameter indicates that the API response should only contain resources created before the specified time. The value is an RFC 3339 formatted date-time value (1970-01-01T00:00:00Z).
     * @opt_param string q The q parameter specifies the query term to search for.
     * @opt_param string regionCode The regionCode parameter instructs the API to return search results for the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
     * @opt_param string relatedToVideoId The relatedToVideoId parameter retrieves a list of videos that are related to the video that the parameter value identifies. The parameter value must be set to a YouTube video ID and, if you are using this parameter, the type parameter must be set to video.
     * @opt_param string topicId The topicId parameter indicates that the API response should only contain resources associated with the specified topic. The value identifies a Freebase topic ID.
     * @opt_param string type The type parameter restricts a search query to only retrieve a particular type of resource.
     * @opt_param string videoCaption The videoCaption parameter indicates whether the API should filter video search results based on whether they have captions.
     * @opt_param string videoCategoryId The videoCategoryId parameter filters video search results based on their category.
     * @opt_param string videoDefinition The videoDefinition parameter lets you restrict a search to only include either high definition (HD) or standard definition (SD) videos. HD videos are available for playback in at least 720p, though higher resolutions, like 1080p, might also be available.
     * @opt_param string videoDimension The videoDimension parameter lets you restrict a search to only retrieve 2D or 3D videos.
     * @opt_param string videoDuration The videoDuration parameter filters video search results based on their duration.
     * @opt_param string videoEmbeddable The videoEmbeddable parameter lets you to restrict a search to only videos that can be embedded into a webpage.
     * @opt_param string videoLicense The videoLicense parameter filters search results to only include videos with a particular license. YouTube lets video uploaders choose to attach either the Creative Commons license or the standard YouTube license to each of their videos.
     * @opt_param string videoSyndicated The videoSyndicated parameter lets you to restrict a search to only videos that can be played outside youtube.com.
     * @return Google_SearchListResponse
     */
    public function listSearch($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_SearchListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "subscriptions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new Google_YouTubeService(...);
   *   $subscriptions = $youtubeService->subscriptions;
   *  </code>
   */
  class Google_SubscriptionsServiceResource extends Google_ServiceResource {


    /**
     * Deletes a subscription. (subscriptions.delete)
     *
     * @param string $id The id parameter specifies the YouTube subscription ID for the resource that is being deleted. In a subscription resource, the id property specifies the YouTube subscription ID.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Adds a subscription for the authenticated user's channel. (subscriptions.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
    The part names that you can include in the parameter value are snippet and contentDetails.
     * @param Google_Subscription $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Subscription
     */
    public function insert($part, Google_Subscription $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Subscription($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns subscription resources that match the API request criteria. (subscriptions.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more subscription resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, and contentDetails.
    If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a subscription resource, the snippet property contains other properties, such as a display title for the subscription. If you set part=snippet, the API response will also contain all of those nested properties.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string channelId The channelId parameter specifies a YouTube channel ID. The API will only return that channel's subscriptions.
     * @opt_param string forChannelId The forChannelId parameter specifies a comma-separated list of channel IDs. The API response will then only contain subscriptions matching those channels.
     * @opt_param string id The id parameter specifies a comma-separated list of the YouTube subscription ID(s) for the resource(s) that are being retrieved. In a subscription resource, the id property specifies the YouTube subscription ID.
     * @opt_param string maxResults USE_DESCRIPTION --- channels:list:maxResults
     * @opt_param bool mine Set this parameter's value to true to retrieve a feed of the authenticated user's subscriptions.
     * @opt_param string order The order parameter specifies the method that will be used to sort resources in the API response.
     * @opt_param string pageToken USE_DESCRIPTION --- channels:list:pageToken
     * @return Google_SubscriptionListResponse
     */
    public function listSubscriptions($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_SubscriptionListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "videoCategories" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new Google_YouTubeService(...);
   *   $videoCategories = $youtubeService->videoCategories;
   *  </code>
   */
  class Google_VideoCategoriesServiceResource extends Google_ServiceResource {


    /**
     * Returns a list of categories that can be associated with YouTube videos. (videoCategories.list)
     *
     * @param string $part The part parameter specifies the videoCategory resource parts that the API response will include. Supported values are id and snippet.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string hl The hl parameter specifies the language that should be used for text values in the API response.
     * @opt_param string id The id parameter specifies a comma-separated list of video category IDs for the resources that you are retrieving.
     * @opt_param string regionCode The regionCode parameter instructs the API to return the list of video categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
     * @return Google_VideoCategoryListResponse
     */
    public function listVideoCategories($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_VideoCategoryListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "videos" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new Google_YouTubeService(...);
   *   $videos = $youtubeService->videos;
   *  </code>
   */
  class Google_VideosServiceResource extends Google_ServiceResource {


    /**
     * Deletes a YouTube video. (videos.delete)
     *
     * @param string $id The id parameter specifies the YouTube video ID for the resource that is being deleted. In a video resource, the id property specifies the video's ID.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Uploads a video to YouTube and optionally sets the video's metadata. (videos.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
    The part names that you can include in the parameter value are snippet, contentDetails, player, statistics, status, and topicDetails. However, not all of those parts contain properties that can be set when setting or updating a video's metadata. For example, the statistics object encapsulates statistics that YouTube calculates for a video and does not contain values that you can set or modify. If the parameter value specifies a part that does not contain mutable values, that part will still be included in the API response.
     * @param Google_Video $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Video
     */
    public function insert($part, Google_Video $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Video($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of videos that match the API request parameters. (videos.list)
     *
     * @param string $id The id parameter specifies a comma-separated list of the YouTube video ID(s) for the resource(s) that are being retrieved. In a video resource, the id property specifies the video's ID.
     * @param string $part The part parameter specifies a comma-separated list of one or more video resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, contentDetails, player, statistics, status, and topicDetails.
    If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a video resource, the snippet property contains the channelId, title, description, tags, and categoryId properties. As such, if you set part=snippet, the API response will contain all of those properties.
     * @param array $optParams Optional parameters.
     * @return Google_VideoListResponse
     */
    public function listVideos($id, $part, $optParams = array()) {
      $params = array('id' => $id, 'part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_VideoListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a video's metadata. (videos.update)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
    The part names that you can include in the parameter value are snippet, contentDetails, player, statistics, status, and topicDetails.
    Note that this method will override the existing values for all of the mutable properties that are contained in any parts that the parameter value specifies. For example, a video's privacy setting is contained in the status part. As such, if your request is updating a private video, and the request's part parameter value includes the status part, the video's privacy setting will be updated to whatever value the request body specifies. If the request body does not specify a value, the existing privacy setting will be removed and the video will revert to the default privacy setting.
    In addition, not all of those parts contain properties that can be set when setting or updating a video's metadata. For example, the statistics object encapsulates statistics that YouTube calculates for a video and does not contain values that you can set or modify. If the parameter value specifies a part that does not contain mutable values, that part will still be included in the API response.
     * @param Google_Video $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Video
     */
    public function update($part, Google_Video $postBody, $optParams = array()) {
      $params = array('part' => $part, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Video($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Google_YouTube (v3).
 *
 * <p>
 * Programmatic access to YouTube features.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/youtube/v3" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_YouTubeService extends Google_Service {
  public $activities;
  public $channels;
  public $guideCategories;
  public $liveBroadcasts;
  public $liveStreams;
  public $playlistItems;
  public $playlists;
  public $search;
  public $subscriptions;
  public $videoCategories;
  public $videos;
  /**
   * Constructs the internal representation of the YouTube service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client) {
    $this->servicePath = 'youtube/v3/';
    $this->version = 'v3';
    $this->serviceName = 'youtube';

    $client->addService($this->serviceName, $this->version);
    $this->activities = new Google_ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"insert": {"id": "youtube.activities.insert", "path": "activities", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Activity"}, "response": {"$ref": "Activity"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "list": {"id": "youtube.activities.list", "path": "activities", "httpMethod": "GET", "parameters": {"channelId": {"type": "string", "location": "query"}, "home": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "publishedAfter": {"type": "string", "format": "date-time", "location": "query"}, "publishedBefore": {"type": "string", "format": "date-time", "location": "query"}}, "response": {"$ref": "ActivityListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly"]}}}', true));
    $this->channels = new Google_ChannelsServiceResource($this, $this->serviceName, 'channels', json_decode('{"methods": {"list": {"id": "youtube.channels.list", "path": "channels", "httpMethod": "GET", "parameters": {"categoryId": {"type": "string", "location": "query"}, "id": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "mySubscribers": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "ChannelListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
    $this->guideCategories = new Google_GuideCategoriesServiceResource($this, $this->serviceName, 'guideCategories', json_decode('{"methods": {"list": {"id": "youtube.guideCategories.list", "path": "guideCategories", "httpMethod": "GET", "parameters": {"hl": {"type": "string", "default": "en-US", "location": "query"}, "id": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "regionCode": {"type": "string", "location": "query"}}, "response": {"$ref": "GuideCategoryListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
    $this->liveBroadcasts = new Google_LiveBroadcastsServiceResource($this, $this->serviceName, 'liveBroadcasts', json_decode('{"methods": {"bind": {"id": "youtube.liveBroadcasts.bind", "path": "liveBroadcasts/bind", "httpMethod": "POST", "parameters": {"id": {"type": "string", "required": true, "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "streamId": {"type": "string", "location": "query"}}, "response": {"$ref": "LiveBroadcast"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "delete": {"id": "youtube.liveBroadcasts.delete", "path": "liveBroadcasts", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "insert": {"id": "youtube.liveBroadcasts.insert", "path": "liveBroadcasts", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "LiveBroadcast"}, "response": {"$ref": "LiveBroadcast"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "list": {"id": "youtube.liveBroadcasts.list", "path": "liveBroadcasts", "httpMethod": "GET", "parameters": {"broadcastStatus": {"type": "string", "enum": ["active", "all", "completed", "upcoming"], "location": "query"}, "id": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "onBehalfOf": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "LiveBroadcastList"}, "scopes": ["https://www.googleapis.com/auth/youtube.readonly"]}, "transition": {"id": "youtube.liveBroadcasts.transition", "path": "liveBroadcasts/transition", "httpMethod": "POST", "parameters": {"broadcastStatus": {"type": "string", "required": true, "enum": ["complete", "live", "testing"], "location": "query"}, "id": {"type": "string", "required": true, "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "LiveBroadcast"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "update": {"id": "youtube.liveBroadcasts.update", "path": "liveBroadcasts", "httpMethod": "PUT", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "LiveBroadcast"}, "response": {"$ref": "LiveBroadcast"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}}}', true));
    $this->liveStreams = new Google_LiveStreamsServiceResource($this, $this->serviceName, 'liveStreams', json_decode('{"methods": {"delete": {"id": "youtube.liveStreams.delete", "path": "liveStreams", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "insert": {"id": "youtube.liveStreams.insert", "path": "liveStreams", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "LiveStream"}, "response": {"$ref": "LiveStream"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "list": {"id": "youtube.liveStreams.list", "path": "liveStreams", "httpMethod": "GET", "parameters": {"id": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "onBehalfOf": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "LiveStreamList"}, "scopes": ["https://www.googleapis.com/auth/youtube.readonly"]}, "update": {"id": "youtube.liveStreams.update", "path": "liveStreams", "httpMethod": "PUT", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "LiveStream"}, "response": {"$ref": "LiveStream"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}}}', true));
    $this->playlistItems = new Google_PlaylistItemsServiceResource($this, $this->serviceName, 'playlistItems', json_decode('{"methods": {"delete": {"id": "youtube.playlistItems.delete", "path": "playlistItems", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "insert": {"id": "youtube.playlistItems.insert", "path": "playlistItems", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "PlaylistItem"}, "response": {"$ref": "PlaylistItem"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "list": {"id": "youtube.playlistItems.list", "path": "playlistItems", "httpMethod": "GET", "parameters": {"id": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "playlistId": {"type": "string", "location": "query"}, "videoId": {"type": "string", "location": "query"}}, "response": {"$ref": "PlaylistItemListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}, "update": {"id": "youtube.playlistItems.update", "path": "playlistItems", "httpMethod": "PUT", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "PlaylistItem"}, "response": {"$ref": "PlaylistItem"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
    $this->playlists = new Google_PlaylistsServiceResource($this, $this->serviceName, 'playlists', json_decode('{"methods": {"delete": {"id": "youtube.playlists.delete", "path": "playlists", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "insert": {"id": "youtube.playlists.insert", "path": "playlists", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Playlist"}, "response": {"$ref": "Playlist"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "list": {"id": "youtube.playlists.list", "path": "playlists", "httpMethod": "GET", "parameters": {"channelId": {"type": "string", "location": "query"}, "id": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "PlaylistListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}, "update": {"id": "youtube.playlists.update", "path": "playlists", "httpMethod": "PUT", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Playlist"}, "response": {"$ref": "Playlist"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
    $this->search = new Google_SearchServiceResource($this, $this->serviceName, 'search', json_decode('{"methods": {"list": {"id": "youtube.search.list", "path": "search", "httpMethod": "GET", "parameters": {"channelId": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "order": {"type": "string", "default": "SEARCH_SORT_RELEVANCE", "enum": ["date", "rating", "relevance", "viewCount"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "publishedAfter": {"type": "string", "format": "date-time", "location": "query"}, "publishedBefore": {"type": "string", "format": "date-time", "location": "query"}, "q": {"type": "string", "location": "query"}, "regionCode": {"type": "string", "location": "query"}, "relatedToVideoId": {"type": "string", "location": "query"}, "topicId": {"type": "string", "location": "query"}, "type": {"type": "string", "default": "video,channel,playlist", "location": "query"}, "videoCaption": {"type": "string", "enum": ["any", "closedCaption", "none"], "location": "query"}, "videoCategoryId": {"type": "string", "location": "query"}, "videoDefinition": {"type": "string", "enum": ["any", "high", "standard"], "location": "query"}, "videoDimension": {"type": "string", "enum": ["2d", "3d", "any"], "location": "query"}, "videoDuration": {"type": "string", "enum": ["any", "long", "medium", "short"], "location": "query"}, "videoEmbeddable": {"type": "string", "enum": ["any", "true"], "location": "query"}, "videoLicense": {"type": "string", "enum": ["any", "creativeCommon", "youtube"], "location": "query"}, "videoSyndicated": {"type": "string", "enum": ["any", "true"], "location": "query"}}, "response": {"$ref": "SearchListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
    $this->subscriptions = new Google_SubscriptionsServiceResource($this, $this->serviceName, 'subscriptions', json_decode('{"methods": {"delete": {"id": "youtube.subscriptions.delete", "path": "subscriptions", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "insert": {"id": "youtube.subscriptions.insert", "path": "subscriptions", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Subscription"}, "response": {"$ref": "Subscription"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "list": {"id": "youtube.subscriptions.list", "path": "subscriptions", "httpMethod": "GET", "parameters": {"channelId": {"type": "string", "location": "query"}, "forChannelId": {"type": "string", "location": "query"}, "id": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "order": {"type": "string", "default": "SUBSCRIPTION_ORDER_RELEVANCE", "enum": ["alphabetical", "relevance", "unread"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "SubscriptionListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
    $this->videoCategories = new Google_VideoCategoriesServiceResource($this, $this->serviceName, 'videoCategories', json_decode('{"methods": {"list": {"id": "youtube.videoCategories.list", "path": "videoCategories", "httpMethod": "GET", "parameters": {"hl": {"type": "string", "default": "en_US", "location": "query"}, "id": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "regionCode": {"type": "string", "location": "query"}}, "response": {"$ref": "VideoCategoryListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
    $this->videos = new Google_VideosServiceResource($this, $this->serviceName, 'videos', json_decode('{"methods": {"delete": {"id": "youtube.videos.delete", "path": "videos", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "insert": {"id": "youtube.videos.insert", "path": "videos", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Video"}, "response": {"$ref": "Video"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.upload", "https://www.googleapis.com/auth/youtubepartner"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream", "video/*"], "maxSize": "64GB", "protocols": {"simple": {"multipart": true, "path": "/upload/youtube/v3/videos"}, "resumable": {"multipart": true, "path": "/resumable/upload/youtube/v3/videos"}}}}, "list": {"id": "youtube.videos.list", "path": "videos", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "VideoListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}, "update": {"id": "youtube.videos.update", "path": "videos", "httpMethod": "PUT", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Video"}, "response": {"$ref": "Video"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));

  }
}

class Google_AccessPolicy extends Google_Model {
  public $allowed;
  public $exception;
  public function setAllowed($allowed) {
    $this->allowed = $allowed;
  }
  public function getAllowed() {
    return $this->allowed;
  }
  public function setException(/* array(Google_string) */ $exception) {
    $this->assertIsArray($exception, 'Google_string', __METHOD__);
    $this->exception = $exception;
  }
  public function getException() {
    return $this->exception;
  }
}

class Google_Activity extends Google_Model {
  protected $__contentDetailsType = 'Google_ActivityContentDetails';
  protected $__contentDetailsDataType = '';
  public $contentDetails;
  public $etag;
  public $id;
  public $kind;
  protected $__snippetType = 'Google_ActivitySnippet';
  protected $__snippetDataType = '';
  public $snippet;
  public function setContentDetails(Google_ActivityContentDetails $contentDetails) {
    $this->contentDetails = $contentDetails;
  }
  public function getContentDetails() {
    return $this->contentDetails;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSnippet(Google_ActivitySnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
}

class Google_ActivityContentDetails extends Google_Model {
  protected $__bulletinType = 'Google_ActivityContentDetailsBulletin';
  protected $__bulletinDataType = '';
  public $bulletin;
  protected $__channelItemType = 'Google_ActivityContentDetailsChannelItem';
  protected $__channelItemDataType = '';
  public $channelItem;
  protected $__commentType = 'Google_ActivityContentDetailsComment';
  protected $__commentDataType = '';
  public $comment;
  protected $__favoriteType = 'Google_ActivityContentDetailsFavorite';
  protected $__favoriteDataType = '';
  public $favorite;
  protected $__likeType = 'Google_ActivityContentDetailsLike';
  protected $__likeDataType = '';
  public $like;
  protected $__playlistItemType = 'Google_ActivityContentDetailsPlaylistItem';
  protected $__playlistItemDataType = '';
  public $playlistItem;
  protected $__recommendationType = 'Google_ActivityContentDetailsRecommendation';
  protected $__recommendationDataType = '';
  public $recommendation;
  protected $__socialType = 'Google_ActivityContentDetailsSocial';
  protected $__socialDataType = '';
  public $social;
  protected $__subscriptionType = 'Google_ActivityContentDetailsSubscription';
  protected $__subscriptionDataType = '';
  public $subscription;
  protected $__uploadType = 'Google_ActivityContentDetailsUpload';
  protected $__uploadDataType = '';
  public $upload;
  public function setBulletin(Google_ActivityContentDetailsBulletin $bulletin) {
    $this->bulletin = $bulletin;
  }
  public function getBulletin() {
    return $this->bulletin;
  }
  public function setChannelItem(Google_ActivityContentDetailsChannelItem $channelItem) {
    $this->channelItem = $channelItem;
  }
  public function getChannelItem() {
    return $this->channelItem;
  }
  public function setComment(Google_ActivityContentDetailsComment $comment) {
    $this->comment = $comment;
  }
  public function getComment() {
    return $this->comment;
  }
  public function setFavorite(Google_ActivityContentDetailsFavorite $favorite) {
    $this->favorite = $favorite;
  }
  public function getFavorite() {
    return $this->favorite;
  }
  public function setLike(Google_ActivityContentDetailsLike $like) {
    $this->like = $like;
  }
  public function getLike() {
    return $this->like;
  }
  public function setPlaylistItem(Google_ActivityContentDetailsPlaylistItem $playlistItem) {
    $this->playlistItem = $playlistItem;
  }
  public function getPlaylistItem() {
    return $this->playlistItem;
  }
  public function setRecommendation(Google_ActivityContentDetailsRecommendation $recommendation) {
    $this->recommendation = $recommendation;
  }
  public function getRecommendation() {
    return $this->recommendation;
  }
  public function setSocial(Google_ActivityContentDetailsSocial $social) {
    $this->social = $social;
  }
  public function getSocial() {
    return $this->social;
  }
  public function setSubscription(Google_ActivityContentDetailsSubscription $subscription) {
    $this->subscription = $subscription;
  }
  public function getSubscription() {
    return $this->subscription;
  }
  public function setUpload(Google_ActivityContentDetailsUpload $upload) {
    $this->upload = $upload;
  }
  public function getUpload() {
    return $this->upload;
  }
}

class Google_ActivityContentDetailsBulletin extends Google_Model {
  protected $__resourceIdType = 'Google_ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  public function setResourceId(Google_ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
}

class Google_ActivityContentDetailsChannelItem extends Google_Model {
  protected $__resourceIdType = 'Google_ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  public function setResourceId(Google_ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
}

class Google_ActivityContentDetailsComment extends Google_Model {
  protected $__resourceIdType = 'Google_ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  public function setResourceId(Google_ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
}

class Google_ActivityContentDetailsFavorite extends Google_Model {
  protected $__resourceIdType = 'Google_ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  public function setResourceId(Google_ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
}

class Google_ActivityContentDetailsLike extends Google_Model {
  protected $__resourceIdType = 'Google_ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  public function setResourceId(Google_ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
}

class Google_ActivityContentDetailsPlaylistItem extends Google_Model {
  public $playlistId;
  public $playlistItemId;
  protected $__resourceIdType = 'Google_ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  public function setPlaylistId($playlistId) {
    $this->playlistId = $playlistId;
  }
  public function getPlaylistId() {
    return $this->playlistId;
  }
  public function setPlaylistItemId($playlistItemId) {
    $this->playlistItemId = $playlistItemId;
  }
  public function getPlaylistItemId() {
    return $this->playlistItemId;
  }
  public function setResourceId(Google_ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
}

class Google_ActivityContentDetailsRecommendation extends Google_Model {
  public $reason;
  protected $__resourceIdType = 'Google_ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  protected $__seedResourceIdType = 'Google_ResourceId';
  protected $__seedResourceIdDataType = '';
  public $seedResourceId;
  public function setReason($reason) {
    $this->reason = $reason;
  }
  public function getReason() {
    return $this->reason;
  }
  public function setResourceId(Google_ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
  public function setSeedResourceId(Google_ResourceId $seedResourceId) {
    $this->seedResourceId = $seedResourceId;
  }
  public function getSeedResourceId() {
    return $this->seedResourceId;
  }
}

class Google_ActivityContentDetailsSocial extends Google_Model {
  public $author;
  public $imageUrl;
  public $referenceUrl;
  protected $__resourceIdType = 'Google_ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  public $type;
  public function setAuthor($author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setImageUrl($imageUrl) {
    $this->imageUrl = $imageUrl;
  }
  public function getImageUrl() {
    return $this->imageUrl;
  }
  public function setReferenceUrl($referenceUrl) {
    $this->referenceUrl = $referenceUrl;
  }
  public function getReferenceUrl() {
    return $this->referenceUrl;
  }
  public function setResourceId(Google_ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class Google_ActivityContentDetailsSubscription extends Google_Model {
  protected $__resourceIdType = 'Google_ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  public function setResourceId(Google_ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
}

class Google_ActivityContentDetailsUpload extends Google_Model {
  public $videoId;
  public function setVideoId($videoId) {
    $this->videoId = $videoId;
  }
  public function getVideoId() {
    return $this->videoId;
  }
}

class Google_ActivityListResponse extends Google_Model {
  public $etag;
  protected $__itemsType = 'Google_Activity';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  protected $__pageInfoType = 'Google_PageInfo';
  protected $__pageInfoDataType = '';
  public $pageInfo;
  public $prevPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Google_Activity) */ $items) {
    $this->assertIsArray($items, 'Google_Activity', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_PageInfo $pageInfo) {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo() {
    return $this->pageInfo;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
}

class Google_ActivitySnippet extends Google_Model {
  public $channelId;
  public $description;
  public $groupId;
  public $publishedAt;
  protected $__thumbnailsType = 'Google_Thumbnail';
  protected $__thumbnailsDataType = 'map';
  public $thumbnails;
  public $title;
  public $type;
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setGroupId($groupId) {
    $this->groupId = $groupId;
  }
  public function getGroupId() {
    return $this->groupId;
  }
  public function setPublishedAt($publishedAt) {
    $this->publishedAt = $publishedAt;
  }
  public function getPublishedAt() {
    return $this->publishedAt;
  }
  public function setThumbnails(Google_Thumbnail $thumbnails) {
    $this->thumbnails = $thumbnails;
  }
  public function getThumbnails() {
    return $this->thumbnails;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class Google_Channel extends Google_Model {
  protected $__contentDetailsType = 'Google_ChannelContentDetails';
  protected $__contentDetailsDataType = '';
  public $contentDetails;
  public $etag;
  public $id;
  public $kind;
  protected $__snippetType = 'Google_ChannelSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  protected $__statisticsType = 'Google_ChannelStatistics';
  protected $__statisticsDataType = '';
  public $statistics;
  protected $__statusType = 'Google_ChannelStatus';
  protected $__statusDataType = '';
  public $status;
  protected $__topicDetailsType = 'Google_ChannelTopicDetails';
  protected $__topicDetailsDataType = '';
  public $topicDetails;
  public function setContentDetails(Google_ChannelContentDetails $contentDetails) {
    $this->contentDetails = $contentDetails;
  }
  public function getContentDetails() {
    return $this->contentDetails;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSnippet(Google_ChannelSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
  public function setStatistics(Google_ChannelStatistics $statistics) {
    $this->statistics = $statistics;
  }
  public function getStatistics() {
    return $this->statistics;
  }
  public function setStatus(Google_ChannelStatus $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setTopicDetails(Google_ChannelTopicDetails $topicDetails) {
    $this->topicDetails = $topicDetails;
  }
  public function getTopicDetails() {
    return $this->topicDetails;
  }
}

class Google_ChannelContentDetails extends Google_Model {
  public $googlePlusUserId;
  protected $__relatedPlaylistsType = 'Google_ChannelContentDetailsRelatedPlaylists';
  protected $__relatedPlaylistsDataType = '';
  public $relatedPlaylists;
  public function setGooglePlusUserId($googlePlusUserId) {
    $this->googlePlusUserId = $googlePlusUserId;
  }
  public function getGooglePlusUserId() {
    return $this->googlePlusUserId;
  }
  public function setRelatedPlaylists(Google_ChannelContentDetailsRelatedPlaylists $relatedPlaylists) {
    $this->relatedPlaylists = $relatedPlaylists;
  }
  public function getRelatedPlaylists() {
    return $this->relatedPlaylists;
  }
}

class Google_ChannelContentDetailsRelatedPlaylists extends Google_Model {
  public $favorites;
  public $likes;
  public $uploads;
  public $watchHistory;
  public $watchLater;
  public function setFavorites($favorites) {
    $this->favorites = $favorites;
  }
  public function getFavorites() {
    return $this->favorites;
  }
  public function setLikes($likes) {
    $this->likes = $likes;
  }
  public function getLikes() {
    return $this->likes;
  }
  public function setUploads($uploads) {
    $this->uploads = $uploads;
  }
  public function getUploads() {
    return $this->uploads;
  }
  public function setWatchHistory($watchHistory) {
    $this->watchHistory = $watchHistory;
  }
  public function getWatchHistory() {
    return $this->watchHistory;
  }
  public function setWatchLater($watchLater) {
    $this->watchLater = $watchLater;
  }
  public function getWatchLater() {
    return $this->watchLater;
  }
}

class Google_ChannelListResponse extends Google_Model {
  public $etag;
  protected $__itemsType = 'Google_Channel';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  protected $__pageInfoType = 'Google_PageInfo';
  protected $__pageInfoDataType = '';
  public $pageInfo;
  public $prevPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Google_Channel) */ $items) {
    $this->assertIsArray($items, 'Google_Channel', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_PageInfo $pageInfo) {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo() {
    return $this->pageInfo;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
}

class Google_ChannelSnippet extends Google_Model {
  public $description;
  public $publishedAt;
  protected $__thumbnailsType = 'Google_Thumbnail';
  protected $__thumbnailsDataType = 'map';
  public $thumbnails;
  public $title;
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setPublishedAt($publishedAt) {
    $this->publishedAt = $publishedAt;
  }
  public function getPublishedAt() {
    return $this->publishedAt;
  }
  public function setThumbnails(Google_Thumbnail $thumbnails) {
    $this->thumbnails = $thumbnails;
  }
  public function getThumbnails() {
    return $this->thumbnails;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Google_ChannelStatistics extends Google_Model {
  public $commentCount;
  public $subscriberCount;
  public $videoCount;
  public $viewCount;
  public function setCommentCount($commentCount) {
    $this->commentCount = $commentCount;
  }
  public function getCommentCount() {
    return $this->commentCount;
  }
  public function setSubscriberCount($subscriberCount) {
    $this->subscriberCount = $subscriberCount;
  }
  public function getSubscriberCount() {
    return $this->subscriberCount;
  }
  public function setVideoCount($videoCount) {
    $this->videoCount = $videoCount;
  }
  public function getVideoCount() {
    return $this->videoCount;
  }
  public function setViewCount($viewCount) {
    $this->viewCount = $viewCount;
  }
  public function getViewCount() {
    return $this->viewCount;
  }
}

class Google_ChannelStatus extends Google_Model {
  public $privacyStatus;
  public function setPrivacyStatus($privacyStatus) {
    $this->privacyStatus = $privacyStatus;
  }
  public function getPrivacyStatus() {
    return $this->privacyStatus;
  }
}

class Google_ChannelTopicDetails extends Google_Model {
  public $topicIds;
  public function setTopicIds(/* array(Google_string) */ $topicIds) {
    $this->assertIsArray($topicIds, 'Google_string', __METHOD__);
    $this->topicIds = $topicIds;
  }
  public function getTopicIds() {
    return $this->topicIds;
  }
}

class Google_GeoPoint extends Google_Model {
  public $elevation;
  public $latitude;
  public $longitude;
  public function setElevation($elevation) {
    $this->elevation = $elevation;
  }
  public function getElevation() {
    return $this->elevation;
  }
  public function setLatitude($latitude) {
    $this->latitude = $latitude;
  }
  public function getLatitude() {
    return $this->latitude;
  }
  public function setLongitude($longitude) {
    $this->longitude = $longitude;
  }
  public function getLongitude() {
    return $this->longitude;
  }
}

class Google_GuideCategory extends Google_Model {
  public $etag;
  public $id;
  public $kind;
  protected $__snippetType = 'Google_GuideCategorySnippet';
  protected $__snippetDataType = '';
  public $snippet;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSnippet(Google_GuideCategorySnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
}

class Google_GuideCategoryListResponse extends Google_Model {
  public $etag;
  protected $__itemsType = 'Google_GuideCategory';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Google_GuideCategory) */ $items) {
    $this->assertIsArray($items, 'Google_GuideCategory', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_GuideCategorySnippet extends Google_Model {
  public $channelId;
  public $title;
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Google_LiveBroadcast extends Google_Model {
  protected $__contentDetailsType = 'Google_LiveBroadcastContentDetails';
  protected $__contentDetailsDataType = '';
  public $contentDetails;
  public $etag;
  public $id;
  public $kind;
  protected $__slateSettingsType = 'Google_LiveBroadcastSlateSettings';
  protected $__slateSettingsDataType = '';
  public $slateSettings;
  protected $__snippetType = 'Google_LiveBroadcastSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  protected $__statusType = 'Google_LiveBroadcastStatus';
  protected $__statusDataType = '';
  public $status;
  public function setContentDetails(Google_LiveBroadcastContentDetails $contentDetails) {
    $this->contentDetails = $contentDetails;
  }
  public function getContentDetails() {
    return $this->contentDetails;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSlateSettings(Google_LiveBroadcastSlateSettings $slateSettings) {
    $this->slateSettings = $slateSettings;
  }
  public function getSlateSettings() {
    return $this->slateSettings;
  }
  public function setSnippet(Google_LiveBroadcastSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
  public function setStatus(Google_LiveBroadcastStatus $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class Google_LiveBroadcastContentDetails extends Google_Model {
  public $boundStreamId;
  public $enableArchive;
  public $enableContentEncryption;
  public $enableDvr;
  public $enableEmbed;
  protected $__monitorStreamType = 'Google_LiveBroadcastContentDetailsMonitorStream';
  protected $__monitorStreamDataType = '';
  public $monitorStream;
  public $startWithSlateCuepoint;
  public function setBoundStreamId($boundStreamId) {
    $this->boundStreamId = $boundStreamId;
  }
  public function getBoundStreamId() {
    return $this->boundStreamId;
  }
  public function setEnableArchive($enableArchive) {
    $this->enableArchive = $enableArchive;
  }
  public function getEnableArchive() {
    return $this->enableArchive;
  }
  public function setEnableContentEncryption($enableContentEncryption) {
    $this->enableContentEncryption = $enableContentEncryption;
  }
  public function getEnableContentEncryption() {
    return $this->enableContentEncryption;
  }
  public function setEnableDvr($enableDvr) {
    $this->enableDvr = $enableDvr;
  }
  public function getEnableDvr() {
    return $this->enableDvr;
  }
  public function setEnableEmbed($enableEmbed) {
    $this->enableEmbed = $enableEmbed;
  }
  public function getEnableEmbed() {
    return $this->enableEmbed;
  }
  public function setMonitorStream(Google_LiveBroadcastContentDetailsMonitorStream $monitorStream) {
    $this->monitorStream = $monitorStream;
  }
  public function getMonitorStream() {
    return $this->monitorStream;
  }
  public function setStartWithSlateCuepoint($startWithSlateCuepoint) {
    $this->startWithSlateCuepoint = $startWithSlateCuepoint;
  }
  public function getStartWithSlateCuepoint() {
    return $this->startWithSlateCuepoint;
  }
}

class Google_LiveBroadcastContentDetailsMonitorStream extends Google_Model {
  public $broadcastStreamDelayMs;
  public $embedHtml;
  public $enableMonitorStream;
  public function setBroadcastStreamDelayMs($broadcastStreamDelayMs) {
    $this->broadcastStreamDelayMs = $broadcastStreamDelayMs;
  }
  public function getBroadcastStreamDelayMs() {
    return $this->broadcastStreamDelayMs;
  }
  public function setEmbedHtml($embedHtml) {
    $this->embedHtml = $embedHtml;
  }
  public function getEmbedHtml() {
    return $this->embedHtml;
  }
  public function setEnableMonitorStream($enableMonitorStream) {
    $this->enableMonitorStream = $enableMonitorStream;
  }
  public function getEnableMonitorStream() {
    return $this->enableMonitorStream;
  }
}

class Google_LiveBroadcastList extends Google_Model {
  public $etag;
  protected $__itemsType = 'Google_LiveBroadcast';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  protected $__pageInfoType = 'Google_PageInfo';
  protected $__pageInfoDataType = '';
  public $pageInfo;
  public $prevPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Google_LiveBroadcast) */ $items) {
    $this->assertIsArray($items, 'Google_LiveBroadcast', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_PageInfo $pageInfo) {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo() {
    return $this->pageInfo;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
}

class Google_LiveBroadcastSlateSettings extends Google_Model {
  public $enableSlates;
  protected $__slatesType = 'Google_LiveBroadcastSlateSettingsSlates';
  protected $__slatesDataType = 'map';
  public $slates;
  public function setEnableSlates($enableSlates) {
    $this->enableSlates = $enableSlates;
  }
  public function getEnableSlates() {
    return $this->enableSlates;
  }
  public function setSlates(Google_LiveBroadcastSlateSettingsSlates $slates) {
    $this->slates = $slates;
  }
  public function getSlates() {
    return $this->slates;
  }
}

class Google_LiveBroadcastSlateSettingsSlates extends Google_Model {
  public $backgroundUrl;
  public $textLines;
  public function setBackgroundUrl($backgroundUrl) {
    $this->backgroundUrl = $backgroundUrl;
  }
  public function getBackgroundUrl() {
    return $this->backgroundUrl;
  }
  public function setTextLines(/* array(Google_string) */ $textLines) {
    $this->assertIsArray($textLines, 'Google_string', __METHOD__);
    $this->textLines = $textLines;
  }
  public function getTextLines() {
    return $this->textLines;
  }
}

class Google_LiveBroadcastSnippet extends Google_Model {
  public $actualEndTime;
  public $actualStartTime;
  public $channelId;
  public $description;
  public $publishedAt;
  public $scheduledEndTime;
  public $scheduledStartTime;
  protected $__thumbnailsType = 'Google_Thumbnail';
  protected $__thumbnailsDataType = 'map';
  public $thumbnails;
  public $title;
  public function setActualEndTime($actualEndTime) {
    $this->actualEndTime = $actualEndTime;
  }
  public function getActualEndTime() {
    return $this->actualEndTime;
  }
  public function setActualStartTime($actualStartTime) {
    $this->actualStartTime = $actualStartTime;
  }
  public function getActualStartTime() {
    return $this->actualStartTime;
  }
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setPublishedAt($publishedAt) {
    $this->publishedAt = $publishedAt;
  }
  public function getPublishedAt() {
    return $this->publishedAt;
  }
  public function setScheduledEndTime($scheduledEndTime) {
    $this->scheduledEndTime = $scheduledEndTime;
  }
  public function getScheduledEndTime() {
    return $this->scheduledEndTime;
  }
  public function setScheduledStartTime($scheduledStartTime) {
    $this->scheduledStartTime = $scheduledStartTime;
  }
  public function getScheduledStartTime() {
    return $this->scheduledStartTime;
  }
  public function setThumbnails(Google_Thumbnail $thumbnails) {
    $this->thumbnails = $thumbnails;
  }
  public function getThumbnails() {
    return $this->thumbnails;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Google_LiveBroadcastStatus extends Google_Model {
  public $lifeCycleStatus;
  public $privacyStatus;
  public function setLifeCycleStatus($lifeCycleStatus) {
    $this->lifeCycleStatus = $lifeCycleStatus;
  }
  public function getLifeCycleStatus() {
    return $this->lifeCycleStatus;
  }
  public function setPrivacyStatus($privacyStatus) {
    $this->privacyStatus = $privacyStatus;
  }
  public function getPrivacyStatus() {
    return $this->privacyStatus;
  }
}

class Google_LiveStream extends Google_Model {
  protected $__cdnType = 'Google_LiveStreamCdn';
  protected $__cdnDataType = '';
  public $cdn;
  public $etag;
  public $id;
  public $kind;
  protected $__snippetType = 'Google_LiveStreamSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  protected $__statusType = 'Google_LiveStreamStatus';
  protected $__statusDataType = '';
  public $status;
  public function setCdn(Google_LiveStreamCdn $cdn) {
    $this->cdn = $cdn;
  }
  public function getCdn() {
    return $this->cdn;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSnippet(Google_LiveStreamSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
  public function setStatus(Google_LiveStreamStatus $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class Google_LiveStreamCdn extends Google_Model {
  public $format;
  protected $__ingestionInfoType = 'Google_LiveStreamCdnIngestionInfo';
  protected $__ingestionInfoDataType = '';
  public $ingestionInfo;
  public $ingestionType;
  protected $__multicastIngestionInfoType = 'Google_LiveStreamCdnMulticastIngestionInfo';
  protected $__multicastIngestionInfoDataType = '';
  public $multicastIngestionInfo;
  public function setFormat($format) {
    $this->format = $format;
  }
  public function getFormat() {
    return $this->format;
  }
  public function setIngestionInfo(Google_LiveStreamCdnIngestionInfo $ingestionInfo) {
    $this->ingestionInfo = $ingestionInfo;
  }
  public function getIngestionInfo() {
    return $this->ingestionInfo;
  }
  public function setIngestionType($ingestionType) {
    $this->ingestionType = $ingestionType;
  }
  public function getIngestionType() {
    return $this->ingestionType;
  }
  public function setMulticastIngestionInfo(Google_LiveStreamCdnMulticastIngestionInfo $multicastIngestionInfo) {
    $this->multicastIngestionInfo = $multicastIngestionInfo;
  }
  public function getMulticastIngestionInfo() {
    return $this->multicastIngestionInfo;
  }
}

class Google_LiveStreamCdnIngestionInfo extends Google_Model {
  public $backupIngestionAddress;
  public $ingestionAddress;
  public $streamName;
  public function setBackupIngestionAddress($backupIngestionAddress) {
    $this->backupIngestionAddress = $backupIngestionAddress;
  }
  public function getBackupIngestionAddress() {
    return $this->backupIngestionAddress;
  }
  public function setIngestionAddress($ingestionAddress) {
    $this->ingestionAddress = $ingestionAddress;
  }
  public function getIngestionAddress() {
    return $this->ingestionAddress;
  }
  public function setStreamName($streamName) {
    $this->streamName = $streamName;
  }
  public function getStreamName() {
    return $this->streamName;
  }
}

class Google_LiveStreamCdnMulticastIngestionInfo extends Google_Model {
  public $multicastAddress;
  public function setMulticastAddress($multicastAddress) {
    $this->multicastAddress = $multicastAddress;
  }
  public function getMulticastAddress() {
    return $this->multicastAddress;
  }
}

class Google_LiveStreamList extends Google_Model {
  public $etag;
  protected $__itemsType = 'Google_LiveStream';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  protected $__pageInfoType = 'Google_PageInfo';
  protected $__pageInfoDataType = '';
  public $pageInfo;
  public $prevPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Google_LiveStream) */ $items) {
    $this->assertIsArray($items, 'Google_LiveStream', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_PageInfo $pageInfo) {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo() {
    return $this->pageInfo;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
}

class Google_LiveStreamSnippet extends Google_Model {
  public $channelId;
  public $description;
  public $publishedAt;
  public $title;
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setPublishedAt($publishedAt) {
    $this->publishedAt = $publishedAt;
  }
  public function getPublishedAt() {
    return $this->publishedAt;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Google_LiveStreamStatus extends Google_Model {
  public $streamStatus;
  public function setStreamStatus($streamStatus) {
    $this->streamStatus = $streamStatus;
  }
  public function getStreamStatus() {
    return $this->streamStatus;
  }
}

class Google_PageInfo extends Google_Model {
  public $resultsPerPage;
  public $totalResults;
  public function setResultsPerPage($resultsPerPage) {
    $this->resultsPerPage = $resultsPerPage;
  }
  public function getResultsPerPage() {
    return $this->resultsPerPage;
  }
  public function setTotalResults($totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
}

class Google_Playlist extends Google_Model {
  protected $__contentDetailsType = 'Google_PlaylistContentDetails';
  protected $__contentDetailsDataType = '';
  public $contentDetails;
  public $etag;
  public $id;
  public $kind;
  protected $__playerType = 'Google_PlaylistPlayer';
  protected $__playerDataType = '';
  public $player;
  protected $__snippetType = 'Google_PlaylistSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  protected $__statusType = 'Google_PlaylistStatus';
  protected $__statusDataType = '';
  public $status;
  public function setContentDetails(Google_PlaylistContentDetails $contentDetails) {
    $this->contentDetails = $contentDetails;
  }
  public function getContentDetails() {
    return $this->contentDetails;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPlayer(Google_PlaylistPlayer $player) {
    $this->player = $player;
  }
  public function getPlayer() {
    return $this->player;
  }
  public function setSnippet(Google_PlaylistSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
  public function setStatus(Google_PlaylistStatus $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class Google_PlaylistContentDetails extends Google_Model {
  public $itemCount;
  public function setItemCount($itemCount) {
    $this->itemCount = $itemCount;
  }
  public function getItemCount() {
    return $this->itemCount;
  }
}

class Google_PlaylistItem extends Google_Model {
  protected $__contentDetailsType = 'Google_PlaylistItemContentDetails';
  protected $__contentDetailsDataType = '';
  public $contentDetails;
  public $etag;
  public $id;
  public $kind;
  protected $__snippetType = 'Google_PlaylistItemSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  public function setContentDetails(Google_PlaylistItemContentDetails $contentDetails) {
    $this->contentDetails = $contentDetails;
  }
  public function getContentDetails() {
    return $this->contentDetails;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSnippet(Google_PlaylistItemSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
}

class Google_PlaylistItemContentDetails extends Google_Model {
  public $endAt;
  public $note;
  public $startAt;
  public $videoId;
  public function setEndAt($endAt) {
    $this->endAt = $endAt;
  }
  public function getEndAt() {
    return $this->endAt;
  }
  public function setNote($note) {
    $this->note = $note;
  }
  public function getNote() {
    return $this->note;
  }
  public function setStartAt($startAt) {
    $this->startAt = $startAt;
  }
  public function getStartAt() {
    return $this->startAt;
  }
  public function setVideoId($videoId) {
    $this->videoId = $videoId;
  }
  public function getVideoId() {
    return $this->videoId;
  }
}

class Google_PlaylistItemListResponse extends Google_Model {
  public $etag;
  protected $__itemsType = 'Google_PlaylistItem';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  protected $__pageInfoType = 'Google_PageInfo';
  protected $__pageInfoDataType = '';
  public $pageInfo;
  public $prevPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Google_PlaylistItem) */ $items) {
    $this->assertIsArray($items, 'Google_PlaylistItem', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_PageInfo $pageInfo) {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo() {
    return $this->pageInfo;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
}

class Google_PlaylistItemSnippet extends Google_Model {
  public $channelId;
  public $description;
  public $playlistId;
  public $position;
  public $publishedAt;
  protected $__resourceIdType = 'Google_ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  protected $__thumbnailsType = 'Google_Thumbnail';
  protected $__thumbnailsDataType = 'map';
  public $thumbnails;
  public $title;
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setPlaylistId($playlistId) {
    $this->playlistId = $playlistId;
  }
  public function getPlaylistId() {
    return $this->playlistId;
  }
  public function setPosition($position) {
    $this->position = $position;
  }
  public function getPosition() {
    return $this->position;
  }
  public function setPublishedAt($publishedAt) {
    $this->publishedAt = $publishedAt;
  }
  public function getPublishedAt() {
    return $this->publishedAt;
  }
  public function setResourceId(Google_ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
  public function setThumbnails(Google_Thumbnail $thumbnails) {
    $this->thumbnails = $thumbnails;
  }
  public function getThumbnails() {
    return $this->thumbnails;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Google_PlaylistListResponse extends Google_Model {
  public $etag;
  protected $__itemsType = 'Google_Playlist';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  protected $__pageInfoType = 'Google_PageInfo';
  protected $__pageInfoDataType = '';
  public $pageInfo;
  public $prevPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Google_Playlist) */ $items) {
    $this->assertIsArray($items, 'Google_Playlist', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_PageInfo $pageInfo) {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo() {
    return $this->pageInfo;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
}

class Google_PlaylistPlayer extends Google_Model {
  public $embedHtml;
  public function setEmbedHtml($embedHtml) {
    $this->embedHtml = $embedHtml;
  }
  public function getEmbedHtml() {
    return $this->embedHtml;
  }
}

class Google_PlaylistSnippet extends Google_Model {
  public $channelId;
  public $description;
  public $publishedAt;
  protected $__thumbnailsType = 'Google_Thumbnail';
  protected $__thumbnailsDataType = 'map';
  public $thumbnails;
  public $title;
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setPublishedAt($publishedAt) {
    $this->publishedAt = $publishedAt;
  }
  public function getPublishedAt() {
    return $this->publishedAt;
  }
  public function setThumbnails(Google_Thumbnail $thumbnails) {
    $this->thumbnails = $thumbnails;
  }
  public function getThumbnails() {
    return $this->thumbnails;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Google_PlaylistStatus extends Google_Model {
  public $privacyStatus;
  public function setPrivacyStatus($privacyStatus) {
    $this->privacyStatus = $privacyStatus;
  }
  public function getPrivacyStatus() {
    return $this->privacyStatus;
  }
}

class Google_ResourceId extends Google_Model {
  public $channelId;
  public $kind;
  public $playlistId;
  public $videoId;
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPlaylistId($playlistId) {
    $this->playlistId = $playlistId;
  }
  public function getPlaylistId() {
    return $this->playlistId;
  }
  public function setVideoId($videoId) {
    $this->videoId = $videoId;
  }
  public function getVideoId() {
    return $this->videoId;
  }
}

class Google_SearchListResponse extends Google_Model {
  public $etag;
  protected $__itemsType = 'Google_SearchResult';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  protected $__pageInfoType = 'Google_PageInfo';
  protected $__pageInfoDataType = '';
  public $pageInfo;
  public $prevPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Google_SearchResult) */ $items) {
    $this->assertIsArray($items, 'Google_SearchResult', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_PageInfo $pageInfo) {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo() {
    return $this->pageInfo;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
}

class Google_SearchResult extends Google_Model {
  public $etag;
  protected $__idType = 'Google_ResourceId';
  protected $__idDataType = '';
  public $id;
  public $kind;
  protected $__snippetType = 'Google_SearchResultSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId(Google_ResourceId $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSnippet(Google_SearchResultSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
}

class Google_SearchResultSnippet extends Google_Model {
  public $channelId;
  public $description;
  public $publishedAt;
  protected $__thumbnailsType = 'Google_Thumbnail';
  protected $__thumbnailsDataType = 'map';
  public $thumbnails;
  public $title;
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setPublishedAt($publishedAt) {
    $this->publishedAt = $publishedAt;
  }
  public function getPublishedAt() {
    return $this->publishedAt;
  }
  public function setThumbnails(Google_Thumbnail $thumbnails) {
    $this->thumbnails = $thumbnails;
  }
  public function getThumbnails() {
    return $this->thumbnails;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Google_Subscription extends Google_Model {
  protected $__contentDetailsType = 'Google_SubscriptionContentDetails';
  protected $__contentDetailsDataType = '';
  public $contentDetails;
  public $etag;
  public $id;
  public $kind;
  protected $__snippetType = 'Google_SubscriptionSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  public function setContentDetails(Google_SubscriptionContentDetails $contentDetails) {
    $this->contentDetails = $contentDetails;
  }
  public function getContentDetails() {
    return $this->contentDetails;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSnippet(Google_SubscriptionSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
}

class Google_SubscriptionContentDetails extends Google_Model {
  public $newItemCount;
  public $totalItemCount;
  public function setNewItemCount($newItemCount) {
    $this->newItemCount = $newItemCount;
  }
  public function getNewItemCount() {
    return $this->newItemCount;
  }
  public function setTotalItemCount($totalItemCount) {
    $this->totalItemCount = $totalItemCount;
  }
  public function getTotalItemCount() {
    return $this->totalItemCount;
  }
}

class Google_SubscriptionListResponse extends Google_Model {
  public $etag;
  protected $__itemsType = 'Google_Subscription';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  protected $__pageInfoType = 'Google_PageInfo';
  protected $__pageInfoDataType = '';
  public $pageInfo;
  public $prevPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Google_Subscription) */ $items) {
    $this->assertIsArray($items, 'Google_Subscription', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_PageInfo $pageInfo) {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo() {
    return $this->pageInfo;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
}

class Google_SubscriptionSnippet extends Google_Model {
  public $channelId;
  public $description;
  public $publishedAt;
  protected $__resourceIdType = 'Google_ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  protected $__thumbnailsType = 'Google_Thumbnail';
  protected $__thumbnailsDataType = 'map';
  public $thumbnails;
  public $title;
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setPublishedAt($publishedAt) {
    $this->publishedAt = $publishedAt;
  }
  public function getPublishedAt() {
    return $this->publishedAt;
  }
  public function setResourceId(Google_ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
  public function setThumbnails(Google_Thumbnail $thumbnails) {
    $this->thumbnails = $thumbnails;
  }
  public function getThumbnails() {
    return $this->thumbnails;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Google_Thumbnail extends Google_Model {
  public $height;
  public $url;
  public $width;
  public function setHeight($height) {
    $this->height = $height;
  }
  public function getHeight() {
    return $this->height;
  }
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
  public function setWidth($width) {
    $this->width = $width;
  }
  public function getWidth() {
    return $this->width;
  }
}

class Google_Video extends Google_Model {
  protected $__contentDetailsType = 'Google_VideoContentDetails';
  protected $__contentDetailsDataType = '';
  public $contentDetails;
  public $etag;
  protected $__fileDetailsType = 'Google_VideoFileDetails';
  protected $__fileDetailsDataType = '';
  public $fileDetails;
  public $id;
  public $kind;
  protected $__monetizationDetailsType = 'Google_VideoMonetizationDetails';
  protected $__monetizationDetailsDataType = '';
  public $monetizationDetails;
  protected $__playerType = 'Google_VideoPlayer';
  protected $__playerDataType = '';
  public $player;
  protected $__processingDetailsType = 'Google_VideoProcessingDetails';
  protected $__processingDetailsDataType = '';
  public $processingDetails;
  protected $__recordingDetailsType = 'Google_VideoRecordingDetails';
  protected $__recordingDetailsDataType = '';
  public $recordingDetails;
  protected $__snippetType = 'Google_VideoSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  protected $__statisticsType = 'Google_VideoStatistics';
  protected $__statisticsDataType = '';
  public $statistics;
  protected $__statusType = 'Google_VideoStatus';
  protected $__statusDataType = '';
  public $status;
  protected $__suggestionsType = 'Google_VideoSuggestions';
  protected $__suggestionsDataType = '';
  public $suggestions;
  protected $__topicDetailsType = 'Google_VideoTopicDetails';
  protected $__topicDetailsDataType = '';
  public $topicDetails;
  public function setContentDetails(Google_VideoContentDetails $contentDetails) {
    $this->contentDetails = $contentDetails;
  }
  public function getContentDetails() {
    return $this->contentDetails;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setFileDetails(Google_VideoFileDetails $fileDetails) {
    $this->fileDetails = $fileDetails;
  }
  public function getFileDetails() {
    return $this->fileDetails;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMonetizationDetails(Google_VideoMonetizationDetails $monetizationDetails) {
    $this->monetizationDetails = $monetizationDetails;
  }
  public function getMonetizationDetails() {
    return $this->monetizationDetails;
  }
  public function setPlayer(Google_VideoPlayer $player) {
    $this->player = $player;
  }
  public function getPlayer() {
    return $this->player;
  }
  public function setProcessingDetails(Google_VideoProcessingDetails $processingDetails) {
    $this->processingDetails = $processingDetails;
  }
  public function getProcessingDetails() {
    return $this->processingDetails;
  }
  public function setRecordingDetails(Google_VideoRecordingDetails $recordingDetails) {
    $this->recordingDetails = $recordingDetails;
  }
  public function getRecordingDetails() {
    return $this->recordingDetails;
  }
  public function setSnippet(Google_VideoSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
  public function setStatistics(Google_VideoStatistics $statistics) {
    $this->statistics = $statistics;
  }
  public function getStatistics() {
    return $this->statistics;
  }
  public function setStatus(Google_VideoStatus $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setSuggestions(Google_VideoSuggestions $suggestions) {
    $this->suggestions = $suggestions;
  }
  public function getSuggestions() {
    return $this->suggestions;
  }
  public function setTopicDetails(Google_VideoTopicDetails $topicDetails) {
    $this->topicDetails = $topicDetails;
  }
  public function getTopicDetails() {
    return $this->topicDetails;
  }
}

class Google_VideoCategory extends Google_Model {
  public $etag;
  public $id;
  public $kind;
  protected $__snippetType = 'Google_VideoCategorySnippet';
  protected $__snippetDataType = '';
  public $snippet;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSnippet(Google_VideoCategorySnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
}

class Google_VideoCategoryListResponse extends Google_Model {
  public $etag;
  protected $__itemsType = 'Google_VideoCategory';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Google_VideoCategory) */ $items) {
    $this->assertIsArray($items, 'Google_VideoCategory', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_VideoCategorySnippet extends Google_Model {
  public $channelId;
  public $title;
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Google_VideoContentDetails extends Google_Model {
  public $caption;
  public $definition;
  public $dimension;
  public $duration;
  public $licensedContent;
  protected $__regionRestrictionType = 'Google_VideoContentDetailsRegionRestriction';
  protected $__regionRestrictionDataType = '';
  public $regionRestriction;
  public function setCaption($caption) {
    $this->caption = $caption;
  }
  public function getCaption() {
    return $this->caption;
  }
  public function setDefinition($definition) {
    $this->definition = $definition;
  }
  public function getDefinition() {
    return $this->definition;
  }
  public function setDimension($dimension) {
    $this->dimension = $dimension;
  }
  public function getDimension() {
    return $this->dimension;
  }
  public function setDuration($duration) {
    $this->duration = $duration;
  }
  public function getDuration() {
    return $this->duration;
  }
  public function setLicensedContent($licensedContent) {
    $this->licensedContent = $licensedContent;
  }
  public function getLicensedContent() {
    return $this->licensedContent;
  }
  public function setRegionRestriction(Google_VideoContentDetailsRegionRestriction $regionRestriction) {
    $this->regionRestriction = $regionRestriction;
  }
  public function getRegionRestriction() {
    return $this->regionRestriction;
  }
}

class Google_VideoContentDetailsRegionRestriction extends Google_Model {
  public $allowed;
  public $blocked;
  public function setAllowed(/* array(Google_string) */ $allowed) {
    $this->assertIsArray($allowed, 'Google_string', __METHOD__);
    $this->allowed = $allowed;
  }
  public function getAllowed() {
    return $this->allowed;
  }
  public function setBlocked(/* array(Google_string) */ $blocked) {
    $this->assertIsArray($blocked, 'Google_string', __METHOD__);
    $this->blocked = $blocked;
  }
  public function getBlocked() {
    return $this->blocked;
  }
}

class Google_VideoFileDetails extends Google_Model {
  protected $__audioStreamsType = 'Google_VideoFileDetailsAudioStream';
  protected $__audioStreamsDataType = 'array';
  public $audioStreams;
  public $bitrateBps;
  public $container;
  public $creationTime;
  public $durationMs;
  public $fileName;
  public $fileSize;
  public $fileType;
  protected $__recordingLocationType = 'Google_GeoPoint';
  protected $__recordingLocationDataType = '';
  public $recordingLocation;
  protected $__videoStreamsType = 'Google_VideoFileDetailsVideoStream';
  protected $__videoStreamsDataType = 'array';
  public $videoStreams;
  public function setAudioStreams(/* array(Google_VideoFileDetailsAudioStream) */ $audioStreams) {
    $this->assertIsArray($audioStreams, 'Google_VideoFileDetailsAudioStream', __METHOD__);
    $this->audioStreams = $audioStreams;
  }
  public function getAudioStreams() {
    return $this->audioStreams;
  }
  public function setBitrateBps($bitrateBps) {
    $this->bitrateBps = $bitrateBps;
  }
  public function getBitrateBps() {
    return $this->bitrateBps;
  }
  public function setContainer($container) {
    $this->container = $container;
  }
  public function getContainer() {
    return $this->container;
  }
  public function setCreationTime($creationTime) {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime() {
    return $this->creationTime;
  }
  public function setDurationMs($durationMs) {
    $this->durationMs = $durationMs;
  }
  public function getDurationMs() {
    return $this->durationMs;
  }
  public function setFileName($fileName) {
    $this->fileName = $fileName;
  }
  public function getFileName() {
    return $this->fileName;
  }
  public function setFileSize($fileSize) {
    $this->fileSize = $fileSize;
  }
  public function getFileSize() {
    return $this->fileSize;
  }
  public function setFileType($fileType) {
    $this->fileType = $fileType;
  }
  public function getFileType() {
    return $this->fileType;
  }
  public function setRecordingLocation(Google_GeoPoint $recordingLocation) {
    $this->recordingLocation = $recordingLocation;
  }
  public function getRecordingLocation() {
    return $this->recordingLocation;
  }
  public function setVideoStreams(/* array(Google_VideoFileDetailsVideoStream) */ $videoStreams) {
    $this->assertIsArray($videoStreams, 'Google_VideoFileDetailsVideoStream', __METHOD__);
    $this->videoStreams = $videoStreams;
  }
  public function getVideoStreams() {
    return $this->videoStreams;
  }
}

class Google_VideoFileDetailsAudioStream extends Google_Model {
  public $bitrateBps;
  public $channelCount;
  public $codec;
  public $vendor;
  public function setBitrateBps($bitrateBps) {
    $this->bitrateBps = $bitrateBps;
  }
  public function getBitrateBps() {
    return $this->bitrateBps;
  }
  public function setChannelCount($channelCount) {
    $this->channelCount = $channelCount;
  }
  public function getChannelCount() {
    return $this->channelCount;
  }
  public function setCodec($codec) {
    $this->codec = $codec;
  }
  public function getCodec() {
    return $this->codec;
  }
  public function setVendor($vendor) {
    $this->vendor = $vendor;
  }
  public function getVendor() {
    return $this->vendor;
  }
}

class Google_VideoFileDetailsVideoStream extends Google_Model {
  public $aspectRatio;
  public $bitrateBps;
  public $codec;
  public $frameRateFps;
  public $heightPixels;
  public $rotation;
  public $vendor;
  public $widthPixels;
  public function setAspectRatio($aspectRatio) {
    $this->aspectRatio = $aspectRatio;
  }
  public function getAspectRatio() {
    return $this->aspectRatio;
  }
  public function setBitrateBps($bitrateBps) {
    $this->bitrateBps = $bitrateBps;
  }
  public function getBitrateBps() {
    return $this->bitrateBps;
  }
  public function setCodec($codec) {
    $this->codec = $codec;
  }
  public function getCodec() {
    return $this->codec;
  }
  public function setFrameRateFps($frameRateFps) {
    $this->frameRateFps = $frameRateFps;
  }
  public function getFrameRateFps() {
    return $this->frameRateFps;
  }
  public function setHeightPixels($heightPixels) {
    $this->heightPixels = $heightPixels;
  }
  public function getHeightPixels() {
    return $this->heightPixels;
  }
  public function setRotation($rotation) {
    $this->rotation = $rotation;
  }
  public function getRotation() {
    return $this->rotation;
  }
  public function setVendor($vendor) {
    $this->vendor = $vendor;
  }
  public function getVendor() {
    return $this->vendor;
  }
  public function setWidthPixels($widthPixels) {
    $this->widthPixels = $widthPixels;
  }
  public function getWidthPixels() {
    return $this->widthPixels;
  }
}

class Google_VideoListResponse extends Google_Model {
  public $etag;
  protected $__itemsType = 'Google_Video';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Google_Video) */ $items) {
    $this->assertIsArray($items, 'Google_Video', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_VideoMonetizationDetails extends Google_Model {
  protected $__accessType = 'Google_AccessPolicy';
  protected $__accessDataType = '';
  public $access;
  public function setAccess(Google_AccessPolicy $access) {
    $this->access = $access;
  }
  public function getAccess() {
    return $this->access;
  }
}

class Google_VideoPlayer extends Google_Model {
  public $embedHtml;
  public function setEmbedHtml($embedHtml) {
    $this->embedHtml = $embedHtml;
  }
  public function getEmbedHtml() {
    return $this->embedHtml;
  }
}

class Google_VideoProcessingDetails extends Google_Model {
  public $editorSuggestionsAvailability;
  public $fileDetailsAvailability;
  public $processingFailureReason;
  public $processingIssuesAvailability;
  protected $__processingProgressType = 'Google_VideoProcessingDetailsProcessingProgress';
  protected $__processingProgressDataType = '';
  public $processingProgress;
  public $processingStatus;
  public $tagSuggestionsAvailability;
  public $thumbnailsAvailability;
  public function setEditorSuggestionsAvailability($editorSuggestionsAvailability) {
    $this->editorSuggestionsAvailability = $editorSuggestionsAvailability;
  }
  public function getEditorSuggestionsAvailability() {
    return $this->editorSuggestionsAvailability;
  }
  public function setFileDetailsAvailability($fileDetailsAvailability) {
    $this->fileDetailsAvailability = $fileDetailsAvailability;
  }
  public function getFileDetailsAvailability() {
    return $this->fileDetailsAvailability;
  }
  public function setProcessingFailureReason($processingFailureReason) {
    $this->processingFailureReason = $processingFailureReason;
  }
  public function getProcessingFailureReason() {
    return $this->processingFailureReason;
  }
  public function setProcessingIssuesAvailability($processingIssuesAvailability) {
    $this->processingIssuesAvailability = $processingIssuesAvailability;
  }
  public function getProcessingIssuesAvailability() {
    return $this->processingIssuesAvailability;
  }
  public function setProcessingProgress(Google_VideoProcessingDetailsProcessingProgress $processingProgress) {
    $this->processingProgress = $processingProgress;
  }
  public function getProcessingProgress() {
    return $this->processingProgress;
  }
  public function setProcessingStatus($processingStatus) {
    $this->processingStatus = $processingStatus;
  }
  public function getProcessingStatus() {
    return $this->processingStatus;
  }
  public function setTagSuggestionsAvailability($tagSuggestionsAvailability) {
    $this->tagSuggestionsAvailability = $tagSuggestionsAvailability;
  }
  public function getTagSuggestionsAvailability() {
    return $this->tagSuggestionsAvailability;
  }
  public function setThumbnailsAvailability($thumbnailsAvailability) {
    $this->thumbnailsAvailability = $thumbnailsAvailability;
  }
  public function getThumbnailsAvailability() {
    return $this->thumbnailsAvailability;
  }
}

class Google_VideoProcessingDetailsProcessingProgress extends Google_Model {
  public $partsProcessed;
  public $partsTotal;
  public $timeLeftMs;
  public function setPartsProcessed($partsProcessed) {
    $this->partsProcessed = $partsProcessed;
  }
  public function getPartsProcessed() {
    return $this->partsProcessed;
  }
  public function setPartsTotal($partsTotal) {
    $this->partsTotal = $partsTotal;
  }
  public function getPartsTotal() {
    return $this->partsTotal;
  }
  public function setTimeLeftMs($timeLeftMs) {
    $this->timeLeftMs = $timeLeftMs;
  }
  public function getTimeLeftMs() {
    return $this->timeLeftMs;
  }
}

class Google_VideoRecordingDetails extends Google_Model {
  protected $__locationType = 'Google_GeoPoint';
  protected $__locationDataType = '';
  public $location;
  public $locationDescription;
  public $recordingDate;
  public function setLocation(Google_GeoPoint $location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setLocationDescription($locationDescription) {
    $this->locationDescription = $locationDescription;
  }
  public function getLocationDescription() {
    return $this->locationDescription;
  }
  public function setRecordingDate($recordingDate) {
    $this->recordingDate = $recordingDate;
  }
  public function getRecordingDate() {
    return $this->recordingDate;
  }
}

class Google_VideoSnippet extends Google_Model {
  public $categoryId;
  public $channelId;
  public $description;
  public $publishedAt;
  public $tags;
  protected $__thumbnailsType = 'Google_Thumbnail';
  protected $__thumbnailsDataType = 'map';
  public $thumbnails;
  public $title;
  public function setCategoryId($categoryId) {
    $this->categoryId = $categoryId;
  }
  public function getCategoryId() {
    return $this->categoryId;
  }
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setPublishedAt($publishedAt) {
    $this->publishedAt = $publishedAt;
  }
  public function getPublishedAt() {
    return $this->publishedAt;
  }
  public function setTags(/* array(Google_string) */ $tags) {
    $this->assertIsArray($tags, 'Google_string', __METHOD__);
    $this->tags = $tags;
  }
  public function getTags() {
    return $this->tags;
  }
  public function setThumbnails(Google_Thumbnail $thumbnails) {
    $this->thumbnails = $thumbnails;
  }
  public function getThumbnails() {
    return $this->thumbnails;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Google_VideoStatistics extends Google_Model {
  public $commentCount;
  public $dislikeCount;
  public $favoriteCount;
  public $likeCount;
  public $viewCount;
  public function setCommentCount($commentCount) {
    $this->commentCount = $commentCount;
  }
  public function getCommentCount() {
    return $this->commentCount;
  }
  public function setDislikeCount($dislikeCount) {
    $this->dislikeCount = $dislikeCount;
  }
  public function getDislikeCount() {
    return $this->dislikeCount;
  }
  public function setFavoriteCount($favoriteCount) {
    $this->favoriteCount = $favoriteCount;
  }
  public function getFavoriteCount() {
    return $this->favoriteCount;
  }
  public function setLikeCount($likeCount) {
    $this->likeCount = $likeCount;
  }
  public function getLikeCount() {
    return $this->likeCount;
  }
  public function setViewCount($viewCount) {
    $this->viewCount = $viewCount;
  }
  public function getViewCount() {
    return $this->viewCount;
  }
}

class Google_VideoStatus extends Google_Model {
  public $embeddable;
  public $failureReason;
  public $license;
  public $privacyStatus;
  public $rejectionReason;
  public $uploadStatus;
  public function setEmbeddable($embeddable) {
    $this->embeddable = $embeddable;
  }
  public function getEmbeddable() {
    return $this->embeddable;
  }
  public function setFailureReason($failureReason) {
    $this->failureReason = $failureReason;
  }
  public function getFailureReason() {
    return $this->failureReason;
  }
  public function setLicense($license) {
    $this->license = $license;
  }
  public function getLicense() {
    return $this->license;
  }
  public function setPrivacyStatus($privacyStatus) {
    $this->privacyStatus = $privacyStatus;
  }
  public function getPrivacyStatus() {
    return $this->privacyStatus;
  }
  public function setRejectionReason($rejectionReason) {
    $this->rejectionReason = $rejectionReason;
  }
  public function getRejectionReason() {
    return $this->rejectionReason;
  }
  public function setUploadStatus($uploadStatus) {
    $this->uploadStatus = $uploadStatus;
  }
  public function getUploadStatus() {
    return $this->uploadStatus;
  }
}

class Google_VideoSuggestions extends Google_Model {
  public $editorSuggestions;
  public $processingErrors;
  public $processingHints;
  public $processingWarnings;
  protected $__tagSuggestionsType = 'Google_VideoSuggestionsTagSuggestion';
  protected $__tagSuggestionsDataType = 'array';
  public $tagSuggestions;
  public function setEditorSuggestions(/* array(Google_string) */ $editorSuggestions) {
    $this->assertIsArray($editorSuggestions, 'Google_string', __METHOD__);
    $this->editorSuggestions = $editorSuggestions;
  }
  public function getEditorSuggestions() {
    return $this->editorSuggestions;
  }
  public function setProcessingErrors(/* array(Google_string) */ $processingErrors) {
    $this->assertIsArray($processingErrors, 'Google_string', __METHOD__);
    $this->processingErrors = $processingErrors;
  }
  public function getProcessingErrors() {
    return $this->processingErrors;
  }
  public function setProcessingHints(/* array(Google_string) */ $processingHints) {
    $this->assertIsArray($processingHints, 'Google_string', __METHOD__);
    $this->processingHints = $processingHints;
  }
  public function getProcessingHints() {
    return $this->processingHints;
  }
  public function setProcessingWarnings(/* array(Google_string) */ $processingWarnings) {
    $this->assertIsArray($processingWarnings, 'Google_string', __METHOD__);
    $this->processingWarnings = $processingWarnings;
  }
  public function getProcessingWarnings() {
    return $this->processingWarnings;
  }
  public function setTagSuggestions(/* array(Google_VideoSuggestionsTagSuggestion) */ $tagSuggestions) {
    $this->assertIsArray($tagSuggestions, 'Google_VideoSuggestionsTagSuggestion', __METHOD__);
    $this->tagSuggestions = $tagSuggestions;
  }
  public function getTagSuggestions() {
    return $this->tagSuggestions;
  }
}

class Google_VideoSuggestionsTagSuggestion extends Google_Model {
  public $categoryRestricts;
  public $tag;
  public function setCategoryRestricts(/* array(Google_string) */ $categoryRestricts) {
    $this->assertIsArray($categoryRestricts, 'Google_string', __METHOD__);
    $this->categoryRestricts = $categoryRestricts;
  }
  public function getCategoryRestricts() {
    return $this->categoryRestricts;
  }
  public function setTag($tag) {
    $this->tag = $tag;
  }
  public function getTag() {
    return $this->tag;
  }
}

class Google_VideoTopicDetails extends Google_Model {
  public $topicIds;
  public function setTopicIds(/* array(Google_string) */ $topicIds) {
    $this->assertIsArray($topicIds, 'Google_string', __METHOD__);
    $this->topicIds = $topicIds;
  }
  public function getTopicIds() {
    return $this->topicIds;
  }
}
