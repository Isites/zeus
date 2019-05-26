import axios from 'axios'
import qs from 'qs'

// Add a request interceptor
axios.interceptors.request.use(function (info) {
  // Do something before request is sent
  if(info.method === 'post') {
    // use application / x-www-form-urlencoded
    if (!(info.data instanceof FormData)) {
      info.data = qs.stringify(info.data)
    }
  }
  return info
}, function (error) {
  // Do something with request error
  return Promise.reject(error)
})

export default axios
